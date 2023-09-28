<?php

namespace PS\GestionBundle\Form;

use PS\UtilisateurBundle\Repository\PersonneRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use PS\ParametreBundle\Entity\Assurance;
use PS\GestionBundle\Entity\Patient;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use PS\GestionBundle\Entity\ConsultationCancer;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Form\FormEvent;
use PS\ParametreBundle\Entity\ListeAntecedent;
use Symfony\Component\Form\FormEvents;
use PS\GestionBundle\Entity\TypeCancer;

class ConsultationCancerType extends AbstractType
{
   
    // private $token;

    // private $em;


    // /**
    //  * @param TokenStorage $token
    //  * @param EntityManagerInterface $em
    //  */
    // public function __construct(TokenStorageInterface $token, EntityManagerInterface $em)
    // {
    //     $this->token = $token;
    //     $this->em = $em;
       
    // }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $patient = $options['patient'];

        $builder
            ->add('stade', TextType::class, [
                'label' => "Stade",
                'required' => false,
            ])
            ->add('datePremiereConsultation', DateType::class, [
                'label' => "Date prémière consultation",
                'required' => false,
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'js-datepicker'],
                'placeholder' => 'Date prémière consultation',
                'format' => 'd/M/y',
                'invalid_message' => 'Date de séance invalide. Format attendu (01/01/1900)'
            ])
            ->add('typeCancer', EntityType::class, [
                'class' => TypeCancer::class,
                'choice_label' => function ($cancer) {
                    return strtoupper($cancer->getType());
                },
                'label' => 'Quels sont les types de cancer du patient',
                'required' => true,
                'placeholder' => 'Quels sont les types de cancer du patient',
                'attr'  => [
                    'class' => 'select2 select2-corporate',
                ],
                // 'multiple' => true,
            ])
            ->add('evolution', Textareatype::class, [
                'label' => 'consultationCancer.form.diagnostique',
                ])
            ->add('strategieTraitement', Textareatype::class, [
                'label' => 'consultationCancer.form.diagnostiqueFinal',
                'required' => false
                ])
            ->add('rdv', RendezVousConsultationType::class, ['required' => false, 'label' => false])
            
            ->add('submit', 'submit', ['label' => 'Enregistrer']);
    }


     /**
     * @param FormInterface $form
     * @param Specialite $specialite
     */
    protected function addElements(FormInterface $form, $user = null, Medecin $medecin = null)
    {
        $specialites = [];

        if ($medecin) {
            $specialites   = $medecin->getSpecialites();
        }


        $form->add('specialite', EntityType::class, [
            'class'       => 'ParametreBundle:Specialite',
            'choice_label'    => 'nom',
            'choices' => $specialites,
            'empty_value' => "--- Choisir une specialité ---",
            'empty_data'  => null,       
        ]);

       
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'PS\GestionBundle\Entity\ConsultationCancer',
            'patient' => null,
          
            //'validation_groups' => ['Default', 'ConsultationCancer'],
            'edit' => true,
            'doc_options' => [],
            // 'validation_groups' => function (FormInterface $form) {
            //     $data = $form->getData();
            //     if ($data->getFichiers()) {
            //        return ['Default'];
            //     }
            //     return['Default', 'ConsultationCancer'];
            // }
        ]);

    
        $resolver->setRequired('patient');
        $resolver->setRequired('edit');
        // $resolver->setRequired('doc_options');
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ps_gestionbundle_consultationCancer';
    }

}
