<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use stdClass;

class CartController extends Controller
{
    private function data() : \Illuminate\Support\Collection
    {
        if (!Session::has('cart')) {
            return collect([]);
        }

        $data = Session::get('cart');

        foreach ($data as $key => $d) {
            $d['item'] = DB::table('product')
                ->where('id', '=', $d['id'])
                ->first();
            $d['subtotal'] = $d['item']->price * $d['total'];

            $data[$key] = $d;
        }

        return collect($data);
    }

    private function dataPush(array $d)
    {
        $data = $this->data();
        $existingItemIndex = $data->search(function ($item) use ($d) {
            return $item['id'] === $d['id'];
        });

        if ($existingItemIndex !== false) {
            $existingItem = $data[$existingItemIndex];
            $existingItem['total'] += $d['total'];
            $data->splice($existingItemIndex, 1, [$existingItem]);
        } else {
            $data->push($d);
        }

        Session::put('cart', $data->toArray());

        return $data;
    }

    private function calculateTotal()
    {
        $total = 0;
        $cartData = $this->data();

        foreach ($cartData as $cartItem) {
            $price = $cartItem['item']->price;
            $quantity = $cartItem['total'];
            $subtotalPerItem = $price * $quantity;
            $cartItem['subtotal'] = $subtotalPerItem;
            $total += $subtotalPerItem;
        }

        Session::put('cart', $cartData);

        return $total;
    }

    public function Index()
    {
        // $cartData = $this->data();
        // dd($cartData);
        $cart = new stdClass();
        $cart->grandTotal = $this->calculateTotal();

        return \view('cart', [
            "data" => $this->data(),
            "cart" => $cart
        ]);
    }

    public function CartAddAction(Request $request, int $id)
    {
        $quantity = $request->input('quantity', 1);

        $d = DB::table('product')
            ->where('id', '=', $id)
            ->first();

        if ($d == null) return \response()
            ->json([
                "statusCode" => 404,
                "message" => "Item not found!"
            ]);

        $this->dataPush([
            'id' => $id,
            'total' => $quantity
        ]);

        return \response()->json([
            'statusCode' => 201,
            "message" => "Item added!"
        ]);
    }

    public function removeProduct($id)
    {
        $cart = Session::get('cart', []);

        foreach ($cart as $index => $product) {
            if ($product['id'] == $id) {
                unset($cart[$index]);
            }
        }

        Session::put('cart', $cart);
        return redirect('/cart');
    }
}
