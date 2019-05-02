<?php

namespace App\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Kris\LaravelFormBuilder\Form;


class ProductForm extends Form
{
    public function buildForm()
    {
        $arr_categories = DB::table('categories')->pluck('name','id')->all();
//        dd($arr_categories);

        $this
            ->add('name', 'text', [
                'label' => 'Name',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'enter Name',
                    'data-counter' => 120,
                    'autofocus',
                ],
            ])
            ->add('price', 'text', [
                'label' => 'Price',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'price',
                    'data-counter' => 120,
                ],
            ])
            ->add('category_id', 'select', [
                'label' => 'Categories',
                'label_attr' => ['class' => 'control-label required'],
                'choices' => $arr_categories,
                'empty_value' => '--- Select Category ---'
            ])
            ->add('is_sale', 'checkbox', [
                'label' => 'Sale',
                'label_attr' => ['class' => 'control-label'],
                'value' => 1,
                'checked' => false
            ])
            ->add('is_feature', 'checkbox', [
                'label' => 'Feature',
                'label_attr' => ['class' => 'control-label'],
                'value' => 1,
                'checked' => false
            ])
            ->add('created_by', 'hidden', [
                'value' => Auth::user()->id,
            ])
            ->add('img', 'file',
                [
                    'label'      => 'Choose Image',
            ])
            ->add('Save', 'submit', [
                'attr' => [
                    'class' => ['btn btn-primary']
                ],
            ]);
    }
}
