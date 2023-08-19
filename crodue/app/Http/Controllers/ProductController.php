<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
//use DB;

class ProductController extends Controller
{
    private $product, $products;

    public function index()
    {
        return view('product.add');
    }

    public function editProduct($id)
    {
        $this->product = Product::find($id);
        return view('product.edit', ['product' => $this->product]);
    }
    public function create(Request $request){
        Product::newProduct($request);
        return back()->with('message', 'Product info save successfully');

    }
    public function manage()
    {
        $this->products = Product::all();
        return view('product.manage', ['products' => $this->products]);
    }

    public function updateProduct(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('message', 'Product Info Updated Successfully');
    }

    public function deleteProduct($id)
    {
        Product::deleteProduct($id);
        return back()->with('message', 'Product deleted Successfully');
    }


}
