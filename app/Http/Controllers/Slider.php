<?php

namespace App\Http\Controllers;

use App\SilerModel;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class Slider extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = SilerModel::all();
        return view('sliders.listSliders',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('App\Forms\SliderForm', [
            'method' => 'POST',
            'url' => route('slider.store'),
        ]);
        return view('sliders.createSlider', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider =new SilerModel;
        $slider->des_main = $request->des_main;
        $slider->des_extra = $request->des_extra;
        $slider->img = $request->img;

        //upload images
        $slider->img = date("Y-m-d-H-i-s") . $request['img']->getClientOriginalName();
        $request->img->move('images',$slider->img);

        $slider->save();
        return redirect('admin/slider');
//
//        $image       = $request->file('image');
//        $filename    = $image->getClientOriginalName();
//
//        $image_resize = Image::make($image->getRealPath());
//        $image_resize->resize(300, 300);
//        $image_resize->save(public_path();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,FormBuilder $formBuilder)
    {
        $slider = SilerModel::find($id);
        $form = $formBuilder
            ->create('App\Forms\SliderForm', [
                'method' => 'PUT',
                'url' => route('slider.update', $id),
            ])
            ->setModel($slider);

        return view('sliders.editSlider', compact('form'));
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
//        dd($request->all());
        $arr_sl = $request->all();
        $slide = SilerModel::find($id);
        //        Xu ly Upload Images
        $slide->update($arr_sl);
//        dd($request->img);
        if ($request->img){
            $slide->img = date("Y-m-d-H-i-s") . $request['img']->getClientOriginalName();
            $request->img->move('images',$slide->img);
        }
        $slide->save();

        return redirect('admin/slider')->with('message', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = SilerModel::find($id);
        unlink('images/'.$slider->img);
        $slider->delete();
        return redirect()->back()->with('message', 'destroyed');
    }
}
