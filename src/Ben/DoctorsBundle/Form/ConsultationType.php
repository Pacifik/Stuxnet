<?php

namespace Ben\DoctorsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Ben\DoctorsBundle\Entity\Consultation;

class ConsultationType extends AbstractType
{
    private $general;
    public function __construct($type)
    {
        $this->general = ($type === Consultation::$GENERAL);
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if($this->general)
            $builder
                ->add('motiftype', 'choice', array('label'=>'Type', 'choices' => array('SYSTEMATIC MEDICAL CHECKUP' => 'SYSTEMATIC MEDICAL CHECKUP','MEDICAL CONSULTATION ON APPOINTMENT' => 'APPOINTMENT'),
                    'required' => false,))
                ->add('name', 'text', array('label'=>'Cause'));
        else
            $builder
                ->add('name', 'text', array('label'=>'Medical speciality'))
                ->add('infrastructure', 'text', array('label'=>'Sanitary infrastructures by reference'));

        $builder
            ->add('diagnosis')
            ->add('treatment', 'textarea', array('label'=>'Prescribed treatment', 'required'  => false))
            ->add('person')
            ->add('type', 'hidden');


        if($this->general)
            $builder
                ->add('decision', 'choice', array('label'=>'Decision', 'choices' => array(
                            'Préscription du traitement' => 'Prescription of treatment',
                            'Orientation vers la consultation médicale spécialisé' => 'Needs a specialized medical consultation'),
                    'required' => false,))
                ->add('chronic', 'checkbox', array('label'=>'Chronic disease ?', 'required'  => false));

        $builder->add('consultationmeds', 'collection', array('label'=>'Medicines delivered', 'type' => new ConsultationMedsType(), 'allow_add' => true, 'by_reference' => false, 'allow_delete' => true,'prototype' => true,))
        ;

    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ben\DoctorsBundle\Entity\Consultation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ben_consultation';
    }
}
