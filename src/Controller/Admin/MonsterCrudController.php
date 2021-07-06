<?php

namespace App\Controller\Admin;

use App\Entity\Monster;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MonsterCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Monster::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
            yield IdField::new('id')->onlyOnIndex();
            yield TextField::new('name');
            yield AssociationField::new('region')->setFormTypeOptions(
                ['choice_label' => 'name',
                 'required' => true,
                 'multiple' => false   
                ]
            );
            yield TextField::new('image');
            yield ChoiceField::new('rarete')->setChoices(
                  fn () => [
                    'Commun' => 'Commun',
                    'Peu Commun' => 'Peu Commun',
                    'Rare' => 'Rare',
                    'Mythique' => 'Mythique',
            ]
            );
            yield ChoiceField::new('rang')->setChoices(
                 fn () => [
                    'Sans Rang' => 'Sans Rang',
                    'Bronze' => 'Bronze',
                    'Argent' => 'Argent',
                    'Or' => 'Or',
                    'Obsidienne' => 'Obsidienne',
                    'Légende' => 'Légende',
            
            ]
            );
            yield IntegerField::new('deMin');
            yield IntegerField::new('deMax');
            yield TextareaField::new('description');
    }
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('region');
    }
}
