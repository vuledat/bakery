<?php

namespace App\Http\Controllers;

use App\CategoriesModel;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class Category extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FormBuilder $formBuilder)
    {
        $categories = CategoriesModel::paginate(10);
//        dd($categories);
        $form = $formBuilder->create('App\Forms\CategoryForm', [
//            'method' => 'POST',
//            'url' => route('product.store'),
        ]);
        return view('categories.listCategories',compact('categories', 'form'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cate = CategoriesModel::find($id);
        return response()->json($cate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,FormBuilder $formBuilder)
    {
        $category = CategoriesModel::find($id);
//        dd($category);
        $form = $formBuilder->create('App\Forms\CategoryForm', [
            'method' => 'POST',
            'url' => route('category.update',$id),
        ]);
        return view('categories.editCategory',compact('category', 'form'));
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
//        dd('ok');
        $cate =CategoriesModel::find($id);
        $cate->name = $request->name;
        $cate->save();
        return redirect()->back();
//        return response()->json('Updated Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CategoriesModel::destroy($id);
        return response()->json('Deleted Success');
    }
}
