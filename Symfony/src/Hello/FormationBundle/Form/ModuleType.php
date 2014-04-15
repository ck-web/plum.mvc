<?php
namespace Hello\FormationBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
 
class ModuleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomM', 'text',array('label'=>'Nom module'));
		$builder->add('dateDebut','date',array('label'=>'Date début','format'=>'dd/MM/yyyy'));
        $builder->add('duree','integer',array('invalid_message'=>'Saisir un entier'));
    }
 
    public function getName()
    {
        return 'module';
    }
 
 
	public function setDefaultOptions(OptionsResolverInterface $resolver)
   {
    $resolver->setDefaults(array(
        'data_class' => 'Hello\FormationBundle\Entity\Module',
    ));
   }
}