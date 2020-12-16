<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Product;
use App\Tailor;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index() //catalog
    {
        $products = Product::all();
        return view('admin.catalog.catalog', compact('products'));
    }

    public function show(Product $product) //catalog view satuan
    {
        return view('admin.catalog.view', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.catalog.edit', compact('product'));
    }

    public function create(Product $tailors)
    {
        $tailors = Tailor::all();
        return view('admin.catalog.add', compact('tailors'));
    }

    public function post(Request $request)
    {   
        $this->validate($request, [
			'image' => 'mimes:jpg,jpeg,png,bmp,tiff |max:4096',
		]);
        
        if($request->hasFile('image'))
        {
            $dest = "uploads/product";
            $filename = $request->file('image');
            $realname = $filename->getClientOriginalName();
            $filename-> move($dest, $realname);
        }
            $product = new Product;
            $product->tailor_id = $request->tailor_name;
            $product->product_name = $request->name;
            $product->product_price = $request->price;
            $product->product_desc = $request->desc;
            $product->product_image = $realname;
            $product->product_category = $request->category;
            $product->product_type = $request->type;
            $product->product_material = $request->material;

            $product->save();

        return redirect('/admincatalog');
    }

    public function update(Request $request,Product $product)
    {
        $path = public_path()."/uploads/product/";
        //code for remove old file

        if($request->hasFile('image'))
        {
            if($product->product_image != 'NULL'  && $product->product_image != '')
            {
            $old_photo = $path.$product->product_image;
            unlink($old_photo);
            }
            $dest = "uploads/product";
            $filename = $request->file('image');
            $realname = $filename->getClientOriginalName();
            $filename-> move($dest, $realname);

            Product::where('id', $product->id)
            ->update([
                'product_name' => $request->name,
                'product_price' => $request->price,
                'product_desc' => $request->desc,
                'product_category' => $request->category,
                'product_type' => $request->type,
                'product_material' => $request->material,
                'product_image' => $realname
                ]);
        }
        else
        {
            Product::where('id', $product->id)
            ->update([
                'product_name' => $request->name,
                    'product_price' => $request->price,
                    'product_desc' => $request->desc,
                    'product_category' => $request->category,
                    'product_type' => $request->type,
                    'product_material' => $request->material,
                ]);
        }

        return redirect('/admincatalog');
    }
    
    //delete saat di catalog
    public function destroy(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $product->delete();
        return back();
    }

    //delete saat di view
    public function destroyview(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/admincatalog');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $result = Product::where('product_name','like',"%".$search."%")
        ->paginate();

        return view('admin.catalog.result', compact('result'));
    }

}
