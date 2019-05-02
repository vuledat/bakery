<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getProductByCategory($category_id)
    {
        $products = ProductModel::where('category_id', $category_id)->get();
        return view('home');
    }
}
