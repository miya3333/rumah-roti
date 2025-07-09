<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index()
    {
        return view('pages/product');
    }
    public function danish()
    {
        return view('partials/p_danish');
    }
    public function cake()
    {
        return view('partials/p_cake');
    }
    public function toast()
    {
        return view('partials/p_toast');
    }
    public function dcake()
    {
        return view('partials/p_dcake');
    }
}