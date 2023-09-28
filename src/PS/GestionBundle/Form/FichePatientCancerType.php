<?php

namespace PS\GestionBundle\Form;

use PS\GestionBundle\Entity\FichePatientCancer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use PS\GestionBundle\Entity\TypeCancer;
use PS\GestionBundle\Entity\TypeTraitementSuivi;
use Symfony\Component\Form\CallbackTransformer;

class FichePatientCancerType extends AbstractType
{
    const LISTE_STRATEGIE = [
        'radiothérapie' => 'radiothérapie',
        'chimiothérapie' => 'chimiothérapie',
        'chirurgie' => 'chirurgie'
    ];

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $listeStrategie = self::LISTE_STRATEGIE;

        $builder
            ->add('numeroDossier', TextType::class,[
                'label' => "Numero Dossier Patient",
            ])
            ->add('derniereSeance', DateType::class, [
                'label' => "Date dernière Séance",
                'required' => false,
                'widget' => 'single_text',
                'html5' => false,
                'placeholder' => 'Date dernière Séance',
                'attr' => ['class' => 'js-datepicker'],
                'format' => 'd/M/y',
                'invalid_message' => 'Date de séance invalide. Format attendu (01/01/1900)'
            ])
            // ->add('derniereRadiotherapie', DateTimeType::class, [
            //     'label' => "Dernière Radiotherapie",
            //     'widget' => 'single_text',
            //     'html5' => false,
            //     'placeholder' => 'Dernière Radiotherapie',
            //     'attr' => ['class' => 'js-datepicker'],
            //     'format' => 'dd/MM/yyyy',
            //     'invalid_message' => 'Date de naissance invalide. Format attendu (01/01/1900)'
            // ])
            ->add('statutTraitement', CheckboxType::class,[
                'label'    => 'Ce traitement est t-il en cours actuellement ?',
                'required' => false,
            ])
            ->add('medecinTraitant', TextType::class,[
                'label'    => 'Nom du medecin traitant',
                'required' => false,
            ])
            ->add('contactMedecin', TextType::class,[
                'label'    => 'Contact du médecin traitant',
                'required' => false,
            ])
            ->add('autreStrategie', TextType::class,[
                'label'    => 'Autre ? Veuillez preciser.',
                'required' => false,
            ])
            ->add('typeCancer', EntityType::class, [
                'class' => TypeCancer::class,
                'choice_label' => function($cancer){
                    return strtoupper($cancer->getType());
                },
                'label' => 'Quels sont les types de cancer du patient' ,
                'required' => true,
                'placeholder' => 'Quels sont les types de cancer du patient',
                'attr'  => [
                    'class' => 'select2 select2-corporate',
                ],
                'multiple' => true,
            ])
            ->add('typeTraitement', EntityType::class, [
                'class' => TypeTraitementSuivi::class, 
                'choice_label' => function($traitement){
                    return strtoupper($traitement->getTypeTraitement());
                },
                'label' => 'Choisissez le(s) traitement(s) suivis',
                'required' => true, 
                'placeholder' => 'Choisissez le(s) traitement(s) suivis',
                'attr'  => [
                    'class' => 'select2 select2-corporate',
                ],
                'multiple' => true,
            ])
            ->add('strategieTraitement', ChoiceType::class, [
                'choices' => self::LISTE_STRATEGIE,
                'label' => 'Choisissez le(s) traitement(s) suivis',
                'required' => true, 
                'placeholder' => 'Choisissez le(s) traitement(s) suivis',
                'attr'  => [
                    'class' => 'select2 select2-corporate',
                ],
                'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FichePatientCancer::class,
        ]);
    }
}
