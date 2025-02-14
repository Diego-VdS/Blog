<?php

namespace App\Form;

use App\Entity\BlogPost;
use App\Entity\Comment;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
class AnonymousCommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
                ->add('content', TextareaType::class, [
                'label' => 'Reactie',
                'attr' => ['placeholder' => 'Schrijf je reactie...', 'class' => 'form-control', 'rows' => 5]
            ])      
                 ->add('submit', SubmitType::class, [
                'label' => 'Plaats reactie',
                'attr' => ['class' => 'btn btn-success'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
