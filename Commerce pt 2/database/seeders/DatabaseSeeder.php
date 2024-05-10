<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => \password_hash('12345', \PASSWORD_DEFAULT)
        ]);

        $dataString = <<<'str'
        [
            {
                "id": 1,
                "name": "GoPro HERO6 4K Action Camera - Black",
                "price": 790.50,
                "image": "https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/1.webp",
                "description": "Product 1"
            },
            {
                "id": 2,
                "name": "Canon camera 20x zoom, Black color EOS 2000",
                "price": 320.59,
                "image": "https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/2.webp",
                "description": "Product 2"
            },
            {
                "id": 3,
                "name": "Xiaomi Redmi 8 Original Global Version 4GB",
                "price": 120,
                "image": "https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/3.webp",
                "description": "Product 3"
            },
            {
                "id": 4,
                "name": "Apple iPhone 12 Pro 6.1 RAM 6GB 512GB Unlocked",
                "price": 1520,
                "image": "https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/4.webp",
                "description": "Product 4 MAHAL"
            },
            {
                "id": 5,
                "name": "Apple Watch Series 1 Sport Case 38mm Black",
                "price": 2000,
                "image": "https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/5.webp",
                "description": "Product 5 MAHAL"
            },
            {
                "id": 6,
                "name": "Apple Watch Series 1 Sport Case 38mm Black",
                "price": 2000,
                "image": "https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/6.webp",
                "description": "Product 5 MAHAL"
            },
            {
                "id": 7,
                "name": "T-shirts with multiple colors, for men and lady",
                "price": 200,
                "image": "https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/7.webp",
                "description": "Unisex Baju"
            },
            {
                "id": 8,
                "name": "Random Item 8",
                "price": 20,
                "image": "https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/8.webp",
                "description": "Unisex Baju"
            },
            {
                "id": 9,
                "name": "Random Item 9",
                "price": 90,
                "image": "https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/8.webp",
                "description": "Unisex Baju"
            },
            {
                "id": 10,
                "name": "Random Item 10",
                "price": 100,
                "image": "https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/8.webp",
                "description": "Unisex Baju"
            }
        ]
        str;

        $data = json_decode($dataString, false);

        $query = "INSERT INTO product(name, price, image, description, created_at) VALUES ";
        $params = [];
        foreach ($data as $key => $d) {
            $query .= "(?,?,?,?, CURRENT_TIMESTAMP),";
            $params[] = $d->name;
            $params[] = $d->price;
            $params[] = $d->image;
            $params[] = $d->description;
        }

        $query = Str::substr($query, 0, Str::length($query) - 1);
        // echo $query;
        DB::insert($query,$params);
    }
}
