<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }

    public function product($type, $id)
    {
        echo "<h2>This is the product: $type with the id: $id</h2>";
        //return view('product');
    }

    public function product1($type = 3, $id = 4)
    {
        echo "product$type with id: $id from Shop";
    }
}
