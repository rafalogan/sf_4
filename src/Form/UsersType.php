<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('user_name')
            ->add('user_email')
            ->add('user_pass')
            ->add('user_status')
            ->add('user_level')
            ->add('user_createdAt')
            ->add('user_updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
