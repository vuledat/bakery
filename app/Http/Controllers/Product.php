<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Kris\LaravelFormBuilder\FormBuilder;
use App\ProductModel;
use App\Http\Requests\ProductRequest;

class Product extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ProductModel::orderBy('id', 'desc')->paginate(10);
        return view('products.listProducts', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('App\Forms\ProductForm', [
            'method' => 'POST',
            'url' => route('product.store'),
        ]);

        return view('products.createProduct', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
//        dd( $request->img);

        $product = $request->validated();
        $product1 = ProductModel::updateOrCreate( $product );
//        Xu ly Upload Images

        $product1->img = date("Y-m-d") . $request['img']->getClientOriginalName();
        $request->img->move('images',$product1->img);

        $product1->save();
        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,FormBuilder $formBuilder)
    {
        $model = ProductModel::findOrFail($id);
        $form = $formBuilder
            ->create('App\Forms\ProductForm', [
                'method' => 'PUT',
                'url' => route('product.update'),
            ])
            ->setModel($model);
        return view('products.editProduct', compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,FormBuilder $formBuilder)
    {
        $product = ProductModel::findOrFail($id);
        $form = $formBuilder
            ->create('App\Forms\ProductForm', [
            'method' => 'PUT',
            'url' => route('product.update', $id),
        ])
            ->setModel($product);
        return view('products.editProduct', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
//        dd($request->all());
        $arr_pr = $request->all();
        unset($arr_pr['created_by']);
        $product = ProductModel::find($id);
        //        Xu ly Upload Images
        $product->update($arr_pr);
        if ($request->img) {
        $product->img = date("Y-m-d-H-i-s") . $request['img']->getClientOriginalName();
        $request->img->move('images',$product->img);
        }
        $product->save();

        return redirect('admin/product')->with('message', 'updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = ProductModel::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'destroyed');

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function sale()
    {
        $product = ProductModel::orderBy('updated_at', 'desc')->get();
        return view('products.sale',compact('product'));

    }
    public function postSale(Request $request)
    {
//        dd($request->id);
        $product = ProductModel::find($request->id);
//        dd($request);
        $product->is_sale = $request->is_sale;
        $product->save();
        return response()->json('ok');
    }
}
