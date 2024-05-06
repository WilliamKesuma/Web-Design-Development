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
        $data = \json_decode($data);
        return $data;
    }

    public function View()
    {
        return \view('contact');
    }

    public function ActionContact(Request $request)
    {
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
        return 'Success';
    }

    public function ContactList(Request $request)
    {
        // dd($request->cookie('contact'));

        // Mengambil data dari cookie
        $cookieData = json_decode(Cookie::get('contact'), true);

        // Membuat tabel HTML dari data
        $table = '<table border="1">';
        $table .= '<tr><th>Nama</th><th>Email</th><th>Telepon</th><th>Pesan</th><th>Delete</th></tr>';
        foreach ($cookieData as $key => $entry) {
            $table .= '<tr>';
            $table .= '<td>' . $entry['name'] . '</td>';
            $table .= '<td>' . $entry['email'] . '</td>';
            $table .= '<td>' . $entry['phone'] . '</td>';
            $table .= '<td>' . $entry['message'] . '</td>';
            $table .= '<td><button onclick="deleteRow(' . $key . ')">Delete</button></td>';
            $table .= '</tr>';
        }
        $table .= '</table>';

        // Menambahkan script JavaScript untuk menghapus baris
        $table .= '<script>';
        $table .= 'function deleteRow(index) {';
            $table .= '    var table = document.querySelector("table");';
            $table .= '    var rowIndex = event.target.parentNode.parentNode.rowIndex;';
            $table .= '    table.deleteRow(rowIndex);';
        $table .= '}';
        $table .= '</script>';

        return $table;
    }
}
