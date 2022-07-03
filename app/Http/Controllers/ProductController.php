<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {

        $search = request('search');

        if ($search) {

            $products = Product::where([['name', 'like', '%'.$search.'%']])->get();

        } else {

            $products = Product::all();
        }

        return view('welcome', ['product' => $products, 'search' => $search]);
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {

        $product = new Product;

        $product->name = $request->name;
        $product->description = $request->description;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $ImageExtension = $requestImage->extension();
            $NewImageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $ImageExtension;
            $requestImage->move(public_path("/img/products"), $NewImageName);
            $product->photo = $NewImageName;
        }

        $product->save();

        return redirect("/");
    }

    public function edit($id) {

        $product = Product::findOrFail($id);

        return view('products.edit', ['products' => $product]);
    }

    public function update(Request $request) {

        $data = $request->all();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $ImageExtension = $requestImage->extension();
            $NewImageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $ImageExtension;
            $requestImage->move(public_path("/img/products"), $NewImageName);
            $data['photo'] = $NewImageName;
        }

        Product::findOrFail($request->id)->update($data);

        return redirect("/");
    }

    public function destroy($id) {

        Product::findOrFail($id)->delete();

        return redirect('/');

    }

    public function show($id) {

        $product = Product::findOrFail($id);

        return view('products.show', ['product' => $product]);
    }
}
