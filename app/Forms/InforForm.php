<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class InforForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
                'label' => 'Name',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'Enter Title',
                    'data-counter' => 120,
                    'autofocus',
                ],
            ])
            ->add('content', 'textarea', [
                'label' => 'Content',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'Enter Content',
                    'data-counter' => 120,
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
