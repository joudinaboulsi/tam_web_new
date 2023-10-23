<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\FileUploadHelper;
use App\Product;
use App\HomeTitle;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page = HomeTitle::find(1);
        $products = Product::all();
        return view('cms.products.index', compact('page', 'products'));
    }

    public function storePage(Request $request)
    {
        HomeTitle::find(1)->update([
            'title_product' => $request->title_product,
        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('productCms');
    }

  
    public function create()
    {
        return view('cms.products.create');
    }

    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/product/');
        Product::create([
        
            'image' => $image,
            'alt_image' => $request->alt_image,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('productCms');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('cms.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/product/');
        if($image!=null)
            $product->update(['image' => $image]);

        $product->update([
            'alt_image' => $request->alt_image,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('productCms');
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('productCms');
    }
}
