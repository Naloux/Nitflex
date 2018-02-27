<?php

namespace AppBundle\Form;

use AppBundle\Entity\Studio;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;


class StudioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType:: class)
            ->add('save', SubmitType:: class, ['label' => 'Ajouter un projet']);

        $builder->add('films', EntityType::class, ['class' => Studio::class, 'choice_label' => 'label']);
    }
}