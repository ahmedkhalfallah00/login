<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sujet',TextType::class,[
                'attr' =>[
                'class' =>'form-control',
                'required'=>'required'
                ]
            ])
            ->add('message',TextType::class,[
                'attr' =>[
                'class' =>'form-control',
                'required'=>'required'
                ]
            ])
            ->add('emetteur',TextType::class,[
                'attr' =>[                
                'required'=>'required'
                ]
            ])
            ->add('recepteur',TextType::class,[
                'attr' =>[
                'class' =>'form-control',
                'required'=>'required'
                ]
            ])
            ->add('date',TextType::class,[
                'attr' =>[
                'class' =>'form-control',
                'required'=>'required'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}
