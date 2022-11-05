<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        echo "<h2>This is Admin Shop Area.</h2>";
    }

    public function product($type, $id)
    {
        echo "<h2>This is an Admin product</h2>";
        //return view('product');
    }
}
