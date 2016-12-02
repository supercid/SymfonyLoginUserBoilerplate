<?php
// src/AppBundle/Form/Type/RegistrationFormType.php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use AppBundle\Controller\GroupController;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }


    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getRoles()
    {
        return $this->getBlockPrefix();
    }

    // public function getExistingRoles()
    //     {
    //         $roleHierarchy = $this->container->getParameter('security.role_hierarchy.roles');
    //         $roles = array_keys($roleHierarchy);

    //         foreach ($roles as $role) {
    //             $theRoles[$role] = $role;
    //         }
    //         return $theRoles;
    //     }
}
