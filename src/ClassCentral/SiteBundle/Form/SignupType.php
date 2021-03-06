<?php

namespace ClassCentral\SiteBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SignupType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email','email', array(
                   'attr' => array(
                        'placeholder' => 'Email'
                )
            ))
            ->add('name', null, array('required' => true,'attr'=>array(
                'placeholder' => 'Full name'
    )       ))
        ;

         $builder->add('password', 'password', array(
             'required' => true,
             'invalid_message' => "The password fields must match",
             'label' => 'Password',
             'attr'=>array(
                 'placeholder' => 'Password',
                 'class' => 'inspectletIgnore',
             )
         ));
        $builder->add('save', 'submit',array(
            'label' => 'Sign Up',
            'attr' => array(
                'class' => 'btn btn-primary btn-course-cc'
            )
        ));
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ClassCentral\SiteBundle\Entity\User'
        ));

    }


    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return "classcentral_sitebundle_signuptype";
    }
}