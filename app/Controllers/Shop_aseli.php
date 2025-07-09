<?php

// default ⤵️ ==========
namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('pages/shop');
    }
}