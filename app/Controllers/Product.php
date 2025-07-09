<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $category = $this->request->getGet('category') ?: 'bread'; // Default ke 'bread'
        $data = [
            'activeCategory' => $category,
            'categories' => ['bread', 'danish', 'cake', 'toast', 'dcake'], // Urutan sesuai keinginan
            'products' => $productModel->findAll()
        ];
        return view('pages/product', $data);
    }
}

// =============================

// namespace App\Controllers;

// use App\Models\ProductModel;

// class Product extends BaseController
// {
//     public function index()
//     {
//         $productModel = new ProductModel();
//         $category = $this->request->getGet('category') ?: 'bread'; // Default ke 'bread'
//         $data = [
//             'category' => $category,
//             'products' => $productModel->where('category', $category)->findAll(),
//             'categories' => ['bread', 'cake', 'danish', 'dcake', 'toast']
//         ];
//         return view('pages/product', $data);
//     }
// }

// namespace App\Controllers;

// use App\Models\ProductModel;

// class Product extends BaseController
// {
//     public function index()
//     {
//         $productModel = new ProductModel();
//         $data = [
//             'breadProducts' => $productModel->where('category', 'bread')->findAll()
//         ];
//         return view('pages/product', $data);
//     }

//     public function bread()
//     {
//         $productModel = new ProductModel();
//         $data = [
//             'breadProducts' => $productModel->where('category', 'bread')->findAll()
//         ];
//         return view('pages/product', $data);
//     }

//     public function danish()
//     {
//         $productModel = new ProductModel();
//         $data = [
//             'danishProducts' => $productModel->where('category', 'danish')->findAll()
//         ];
//         return view('partials/p_danish', $data);
//     }

//     public function cake()
//     {
//         $productModel = new ProductModel();
//         $data = [
//             'cakeProducts' => $productModel->where('category', 'cake')->findAll()
//         ];
//         return view('partials/p_cake', $data);
//     }

//     public function toast()
//     {
//         $productModel = new ProductModel();
//         $data = [
//             'toastProducts' => $productModel->where('category', 'toast')->findAll()
//         ];
//         return view('partials/p_toast', $data);
//     }

//     public function dcake()
//     {
//         $productModel = new ProductModel();
//         $data = [
//             'dcakeProducts' => $productModel->where('category', 'dcake')->findAll()
//         ];
//         return view('partials/p_dcake', $data);
//     }
// }

// ========================

// namespace App\Controllers;
// use App\Models\ProductModel;

// class Product extends BaseController
// {
//     public function index()
//     {
//         $productModel = new ProductModel();
//         $data = [
//             'breadProducts' => $productModel->where('category', 'bread')->findAll(),
//             'cakeProducts' => $productModel->where('category', 'cake')->findAll(),
//             'danishProducts' => $productModel->where('category', 'danish')->findAll(),
//             'dcakeProducts' => $productModel->where('category', 'dcake')->findAll(),
//             'toastProducts' => $productModel->where('category', 'toast')->findAll()
//         ];
//         return view('pages/product', $data);
//     }

//     public function danish()
//     {
//         $productModel = new ProductModel();
//         $data['danishProducts'] = $productModel->where('category', 'danish')->findAll();
//         return view('partials/p_danish', $data);
//     }

//     public function cake()
//     {
//         $productModel = new ProductModel();
//         $data['cakeProducts'] = $productModel->where('category', 'cake')->findAll();
//         return view('partials/p_cake', $data);
//     }

//     public function toast()
//     {
//         $productModel = new ProductModel();
//         $data['toastProducts'] = $productModel->where('category', 'toast')->findAll();
//         return view('partials/p_toast', $data);
//     }

//     public function dcake()
//     {
//         $productModel = new ProductModel();
//         $data['dcakeProducts'] = $productModel->where('category', 'dcake')->findAll();
//         return view('partials/p_dcake', $data);
//     }

//     public function bread()
//     {
//         $productModel = new ProductModel();
//         $data['breadProducts'] = $productModel->where('category', 'bread')->findAll();
//         return view('partials/p_bread', $data);
//     }
// }