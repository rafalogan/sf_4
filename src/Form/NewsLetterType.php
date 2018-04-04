<?php

namespace App\Form;

use App\Entity\NewsLetter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsLetterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('newsLetter_nome')
            ->add('newsLetter_email')
            ->add('newsLetter_status')
            ->add('newsLetter_createdAt')
            ->add('newsLetter_updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => NewsLetter::class,
        ]);
    }
}
