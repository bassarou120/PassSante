<?php

namespace PS\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use PS\GestionBundle\Entity\ValeurLigneQuestionnaire;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
class ValeurLigneQuestionnaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('libelle', null, ['label' => false])->add('pourcentage', null, ['label' => false]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ValeurLigneQuestionnaire::class
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ps_gestionbundle_valeurlignequestionnaire';
    }


}
