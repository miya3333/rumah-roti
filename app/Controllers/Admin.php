<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class Admin extends BaseController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $data['products'] = $this->productModel->findAll();
        return view('admin/index', ['title' => 'Daftar Produk', 'products' => $data['products']]);
    }

    public function create()
    {
        log_message('debug', 'Create method called with method: ' . $this->request->getMethod());
        log_message('debug', 'Raw POST data: ' . json_encode($_POST));
        log_message('debug', 'CI Request POST: ' . json_encode($this->request->getPost()));

        if ($this->request->getMethod() !== 'post') {
            return view('admin/create', ['title' => 'Tambah Produk']);
        }

        $data = [
            'name' => $this->request->getPost('name') ?? 'Default Name',
            'category' => $this->request->getPost('category') ?? 'bread',
            'price' => $this->request->getPost('price') ?? 10000,
            'image' => 'placeholder.jpg'
        ];
        log_message('debug', 'Data to save: ' . json_encode($data));

        $result = $this->productModel->insert($data);
        log_message('debug', 'Save result: ' . ($result ? 'Success' : 'Failed'));

        if ($result) {
            return redirect()->to('/admin')->with('success', 'Produk berhasil ditambahkan');
        }
        return redirect()->to('/admin/create')->with('error', 'Gagal menyimpan produk');
    }

    public function edit($id)
    {
        log_message('debug', 'Edit method called with ID: ' . $id);
        $product = $this->productModel->find($id);
        if (!$product) {
            log_message('error', 'Product not found for ID: ' . $id);
            return redirect()->to('/admin')->with('error', 'Produk tidak ditemukan.');
        }

        log_message('debug', 'Raw POST data: ' . json_encode($_POST));
        log_message('debug', 'CI Request POST: ' . json_encode($this->request->getPost()));

        if ($this->request->getMethod() !== 'post') {
            return view('admin/edit', ['title' => 'Edit Produk', 'product' => $product]);
        }

        $data = [
            'name' => $this->request->getPost('name') ?? $product['name'],
            'category' => $this->request->getPost('category') ?? $product['category'],
            'price' => $this->request->getPost('price') ?? $product['price']
        ];
        log_message('debug', 'Data to update: ' . json_encode($data));

        $result = $this->productModel->update($id, $data);
        log_message('debug', 'Update result: ' . ($result ? 'Success' : 'Failed'));

        if ($result) {
            return redirect()->to('/admin')->with('success', 'Produk berhasil diupdate');
        }
        return redirect()->to('/admin/edit/' . $id)->with('error', 'Gagal mengupdate produk');
    }

    public function delete($id)
    {
        $product = $this->productModel->find($id);
        if ($product) {
            $imgPath = FCPATH . 'images/' . $product['image'];
            if (file_exists($imgPath) && $product['image'] !== 'placeholder.jpg') {
                unlink($imgPath);
            }
            $this->productModel->delete($id);
            return redirect()->to('/admin')->with('success', 'Produk berhasil dihapus.');
        }
        return redirect()->to('/admin')->with('error', 'Produk tidak ditemukan.');
    }
}
