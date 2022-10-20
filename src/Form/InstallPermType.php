<?php

namespace App\Form;

use App\Entity\InstallPerm;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InstallPermType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('membersRead',CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'required' => false,
                'attr' => [ 'onclick' => 'submit()',
                ],
            ])
            ->add('membersWrite', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'required' => false,
                'attr' => [ 'onclick' => 'submit()',
                ],
            ])
            ->add('membersAdd', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'required' => false,
                'attr' => [ 'onclick' => 'submit()',
                ],
            ])
            ->add('membersProductsAdd', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'required' => false,
                'attr' => [ 'onclick' => 'submit()',
                ],
            ])
            ->add('membersPaymentSchedulesRead', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'required' => false,
                'attr' => [ 'onclick' => 'submit()',
                ],
            ])
            ->add('membersStatisticRead', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'required' => false,
                'attr' => [ 'onclick' => 'submit()',
                ],
            ])
            ->add('membersSubscriptionRead', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'required' => false,
                'attr' => [ 'onclick' => 'submit()',
                ],
            ])
            ->add('membersSchedulesRead', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'required' => false,
                'attr' => [ 'onclick' => 'submit()',
                ],
            ])
            ->add('membersSchedulesWrite', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'required' => false,
                'attr' => [ 'onclick' => 'submit()',
                ],
            ])
            ->add('paymentDayRead', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'required' => false,
                'attr' => [ 'onclick' => 'submit()',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => InstallPerm::class,
        ]);
    }
}
