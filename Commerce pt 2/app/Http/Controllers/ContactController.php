<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ContactController extends Controller
{
    private function data()
    {
        if (!Cookie::has('contact'))
        {
            return [];
        }

        // Terima as JSON
        $data = Cookie::get('contact');
        $data = collect(\json_decode($data));
        return $data;
    }

    public function View()
    {
        return \view('contact');
    }

    public function ActionContact(Request $request)
    {
        $request->validate([
            "name" => 'required|min:4',
            "email" => 'email',
            "phone" => 'required',
            "message" => 'required|min:10'
        ]);

        $data = $this->data();
        $d = [
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "phone" => $request->input('phone'),
            "message" => $request->input('message'),
        ];

        $data[] = $d;

        $data = \json_encode($data);
        $c = Cookie::make("contact", $data, 60*24*30);
        Cookie::queue($c);

        // dd($request->all());
        // dd(Cookie::get('contact'));
        return \redirect()
            ->back()
            ->with("success", "Contact submit succesfully");
    }

    public function ContactList(Request $request)
    {
        $data = $this->data();

        return \view("contact-list", [
            'data' => $data
        ]);
    }

    public function ContactListDelete(Request $request)
    {
        $data = $this->data();
        $index = $request->input('index');
        unset($data[$index]);

        $data = \json_encode($data);
        $c = Cookie::make("contact", $data, 60*24*30);
        Cookie::queue($c);

        return \redirect('/contact/list')
            ->with("success", "Contact record {$index} deleted!");
    }
}
