<?php

namespace App\Form;

use App\Entity\UserPreference;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserPreferenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tuesday', CheckboxType::class, array('required' => false, 'label' => 'Ich möchte jeweils am Dienstag teilnehmen.'))
            ->add('thursday', CheckboxType::class, array('required' => false, 'label' => 'Ich möchte jeweils am Donnerstag teilnehmen.'))
            ->add('stayInformed', CheckboxType::class, array('required' => false, 'label' => 'Ich möchte informiert werden über die Trainings und entscheide mich spontan.'))
            ->add('save', SubmitType::class, array('label' => 'Speichern'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            //'data_class' => UserPreference::class,
        ]);
    }
}
