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
    
    public function catalog()
    {
        $products = Product::all();
        return view('admin.catalog.catalog', compact('products'));
    }

    public function catalogview(Product $product)
    {
        return view('admin.catalog.view', compact('product'));
    }

    public function catalogedit(Product $product)
    {
        return view('admin.catalog.edit', compact('product'));
    }

    public function editpost(Request $request, Product $product)
    {
        Product::where('id', $product->id)
            ->update([
                'product_name' => $request->name,
                'product_price' => $request->price,
                'product_desc' => $request->description,
                'product_category' => $request->category,
                'product_type' => $request->type,
                'product_material' => $request->material,
                ]);
        return redirect('/admincatalog');
        //return dd($request->all());
    }

    public function catalogadd(Tailor $tailors)
    {
        $tailors = Tailor::all();
        return view('admin.catalog.add', compact('tailors'));
    }

    public function addpost(Request $request)
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

        //$path = $request->file('image')->store('public/uploads');
        //$path = Storage::putFile('public/uploads', $request->file('image'));

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

    public function delete(Product $product)
    {
        $product = Product::where('id', $product->id)->delete();
	    return redirect('/admincatalog');
    }

}
