<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegisterForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'name',
                TextType::class
            )
            ->add(
                'lastname', 
                TextType::class
            )
            ->add(
                'email', 
                TextType::class
            )
            ->add(
                'password', 
                PasswordType::class
            )
            ->add(
                'submit', 
                SubmitType::class
            )
            
        ;
    }

}