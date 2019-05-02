<?php

namespace App\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Kris\LaravelFormBuilder\Form;


class SliderForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('des_main', 'textarea', [
                'label' => 'Description Main',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'enter Description Main',
                    'data-counter' => 120,
                    'autofocus',
                ],
            ])
            ->add('des_extra', 'textarea', [
                'label' => 'Description Extra',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'Description Extra',
                    'data-counter' => 120,
                ],
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
