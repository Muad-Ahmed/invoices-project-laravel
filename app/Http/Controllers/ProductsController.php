<?php

namespace App\Http\Controllers;

use App\products;
use App\sections;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = sections::all();
        $products = products::all();
        return view('products.products', compact('sections', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'product_name' => [
                'required',
                Rule::unique('products', 'product_name')
                    ->where('section_id', $request->section_id),
            ],
            'section_id' => 'required',
        ], [
            'product_name.required' => 'يرجى ادخال اسم المنتج',
            'section_id.required' => 'يرجى تحديد القسم',
            'product_name.unique' => 'هذا المنتج موجود بالفعل في القسم المحدد.',
        ]);

        products::create([
            'product_name' => $request->product_name,
            'section_id' => $request->section_id,
            'description' => $request->description,
        ]);
        session()->flash('add', 'تم اضافة المنتج بنجاح');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $section = sections::find($request->section_id);
        $id = $section->id;
        $product = products::findOrFail($request->pro_id);

        $product->update([
            'section_id' => $id,
            'product_name' => $request->product_name,
            'description' => $request->description,
        ]);
        session()->flash('Edit', 'تم تعديل المنتج بنجاح');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = products::findOrFail($request->pro_id);
        $product->delete();
        session()->flash('delete', 'تم حذف المنتج بنجاح');
        return back();
    }
}
