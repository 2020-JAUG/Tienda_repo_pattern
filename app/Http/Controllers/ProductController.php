<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Traits\ResponseApi;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductController extends Controller
{
    use ResponseApi;

    const PRODUCT_NOT_FOUNT_MESSAGE = 'Product not found';
    const PRODUCT_DELETED_MESSAGE = 'Product deleted';
    const INTERNAL_ERROR_MESSAGE = 'Internal error';

    protected ProductRepositoryInterface $repository;

    public function __construct(ProductRepositoryInterface $repo)
    {
        $this->repository = $repo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->repository->index();
        return view('products.products')->with('myProducts', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $description = $request->input('description');
        $stock = $request->input('stock');

        $product = new Product();
        $product->name = $name;
        $product->price = $price;
        $product->description = $description;
        $product->stock = $stock;
        $product->save();

        return redirect()->action([ProductController::class,'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $description = $request->input('description');
        $stock = $request->input('stock');

        $product = Product::find($id);
        $product->name = $name;
        $product->price = $price;
        $product->description = $description;
        $product->stock = $stock;
        $product->save();

        return redirect()->action([ProductController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->action([ProductController::class,'index']);
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        return view('products.delete')->with('product',$product);
    }
}
