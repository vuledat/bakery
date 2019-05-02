<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InforModel;
use Kris\LaravelFormBuilder\FormBuilder;

class InforController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FormBuilder $formBuilder)
    {
        $infor = InforModel::find(1);
        // dd($infor);
        $form = $formBuilder
            ->create('App\Forms\InforForm', [
                'method' => 'POST',
                'url' => route('infor.update',1),
            ])
            ->setModel($infor);
        return view('infor.listInfor',compact('infor', 'form'));
    }
    /**
     * 
     * 
     */
    public function getInfor()
    {
        //
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
    public function show(FormBuilder $formBuilder,$id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FormBuilder $formBuilder,$id)
    {
        $infor = InforModel::find(1);
        $form = $formBuilder
            ->create('App\Forms\InforForm', [
                'method' => 'PUT',
                'url' => route('infor.update',1),
            ])
            ->setModel($infor);
        return view('infor.listInfor',compact('infor', 'form'));
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
        $arr_if = $request->all();
        $infor = InforModel::find(1);
        $infor->update($arr_if);
        $infor->save();
        return redirect()->back()->with('message', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
