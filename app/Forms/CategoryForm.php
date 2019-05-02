<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class CategoryForm extends Form
{
    public function buildForm()
    {
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
            ->add('Save', 'submit', [
                'attr' => [
                    'id' => "",
                    'class' => ['btn btn-primary']
                ],
            ])
        ;
    }
}
