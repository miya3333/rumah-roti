<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Shop extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $data = [
            'categories' => ['bread', 'danish', 'cake', 'toast', 'dcake'], // Urutan sesuai keinginan
            'products' => $productModel->findAll()
        ];
        return view('pages/shop', $data);
    }
}
