<?php

namespace App\Form\Company;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nip')
            ->add('name')
            ->add('shortName')
            ->add('description')
            ->add('zipCode')
            ->add('city')
            ->add('streetAddress')
            ->add('shortNote')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            'data_class' => CompanyModel::class
        ]);
    }
}
