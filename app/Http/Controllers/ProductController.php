<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function Index()
    {
        $products = Product::get();
        return view('product.index', ['products' => $products]);
    }

    public function Create()
    {
        return view('product.createpost');
    }

    public function Manage()
    {
        $products = Product::get();
        return view('product.managepost', ['products' => $products]);
    }

    public function Edit($id)
    {
        $product = Product::find($id);
        return view('product.editpost', ['product' => $product]);
    }

    public function Update(Request $request)
    {
        // dd($request->input('txtProductName'));
        // dd($request->all());

        $product = Product::find($request->input('id'));
        // dd($product);
        $product->ProductName = $request->input('txtProductName');
        $product->SalePrice = $request->input('txtPrice');
        $product->CategoryName = $request->input('txtCategory');
        $product->ImageLink = $request->input('txtImageLink');
        $product->ProductLink = $request->input('txtProductLink');
        $product->save();
        return redirect()->route('managepost');
    }

    public function Search(Request $request)
    {
        $keyword = $request->input('keyword');
        $products = Product::where('ProductName', 'like', '%' . $keyword . '%')->get();
        return view('product.index', ['products' => $products]);
    }

    public function Store(Request $request)
    {
        $product = new Product();
        $product->ProductName = $request->input('txtProductName');
        $product->SalePrice = $request->input('txtPrice');
        $product->CategoryName = $request->input('txtCategory');
        $product->ImageLink = $request->input('txtImageLink');
        $product->ProductLink = $request->input('txtProductLink');
        $product->save();
        return redirect()->route('dashboard');
    }

    public function Delete($productId)
    {

        $product = Product::find($productId);
        $product->delete();
        return response()->json(['success' => true]);
    }
}
