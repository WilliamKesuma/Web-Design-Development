<?php

//This is not controller!
// This is sample Array DATA!

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
    }
]
str;

$data = json_decode($dataString, false);

var_dump($data);
