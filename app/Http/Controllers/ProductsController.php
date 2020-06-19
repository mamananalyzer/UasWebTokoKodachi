<?php

namespace App\Http\Controllers;

use App\Product;
use App\Categorie;
use App\Brand;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->all());

        if  ($request->has('cari')){
            $products = Product::where('type', 'LIKE', '%'.$request->cari.'%')->get();
        }
        else    {
            $products = Product::all();
        }
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $brands = Brand::all();
        return view('products/create', compact('categories'), compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('picture');

        $this->validate($request,[
            // 'brand' => 'required',
            'categorie' => 'required',
            'type' => 'required|unique:products',
            'price' => 'required',
            'picture' => 'required|unique:products',
            'description' => 'required',
            'listdescription' => 'required',
            // 'datasheet' => 'required',
            // 'usermanual' => 'required'
        ]);

        $image=$request->picture;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images/', $imageName);
            $formInput['picture']=$imageName;
        }


        Product::create($formInput);

        return redirect('/products')->with('status',
        'Terima kasih sudah menginput data, data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
        // return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Categorie::all();
        $brands = Brand::all();
        return view('products.edit')
        ->with(compact('product'))
        ->with(compact('brands'))
        ->with(compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'brand' => 'required',
            'categorie' => 'required',
            'type' => 'required',
            'price' => 'required',
            'picture' => 'required|unique:products',
            'description' => 'required',
            'listdescription' => 'required',
            // 'datasheet' => 'required',
            // 'usermanual' => 'required'
        ]);
        // dd($request->all());
        $product = Product::find($id);
        $product->update($request->all());
        if($request->hasFile('picture')){
            $request->file('picture')->move('images/',$request->file('picture')->getClientOriginalName());
            $product->picture = $request->file('picture')->getClientOriginalName();
            $product->save();
        }
            return redirect('/products')->with('status',
            'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/products')->with('status',
        'Data berhasil dihapus!');
    }
}
