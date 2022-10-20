<?php

namespace App\Form;

use App\Entity\ClientGrants;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientGrantsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('branchId', IntegerType::class, [
                'mapped' => false,
            ])
            ->add('active', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'required' => false,
            ])
            ->add('membersRead', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'mapped' => false,
                'required' => false,
            ])
            ->add('membersWrite', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'mapped' => false,
                'required' => false,
            ])
            ->add('membersAdd', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'mapped' => false,
                'required' => false,
            ])
            ->add('membersPaymentSchedulesRead', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'mapped' => false,
                'required' => false,
            ])
            ->add('membersStatisticRead', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'mapped' => false,
                'required' => false,
            ])
            ->add('membersSubscriptionRead', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'mapped' => false,
                'required' => false,
            ])
            ->add('membersSchedulesRead', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'mapped' => false,
                'required' => false,
            ])
            ->add('membersSchedulesWrite', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'mapped' => false,
                'required' => false,
            ])
            ->add('paymentDayRead', CheckboxType::class, [
                'label_attr' => [
                    'class' => 'checkbox-switch',
                ],
                'mapped' => false,
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ClientGrants::class,
        ]);
    }
}
