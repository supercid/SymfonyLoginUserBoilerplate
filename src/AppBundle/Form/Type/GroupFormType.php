<?php
// src/AppBundle/Form/Type/RegistrationFormType.php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
// use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class GroupFormType extends AbstractType
{


    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\GroupFormType';
    }

    // public function getBlockPrefix()
    // {
    //     return 'app_user_registration';
    // }

    // For Symfony 2.x
    // public function getRoles()
    // {
    //     return $this->getBlockPrefix();
    // }
}
