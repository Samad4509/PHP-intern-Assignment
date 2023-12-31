<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $product, $products = [], $singleProduct, $fullName, $data = [], $index, $result;

    public function index()
    {
        $this->products  = Product::all();
        return view('home', ['products' => $this->products]);
    }

    public function detail($id)
    {
        $this->singleProduct = Product::find($id);
        return view('detail', ['product' => $this->singleProduct]);
    }

}
