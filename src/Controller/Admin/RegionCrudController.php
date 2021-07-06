<?php

namespace App\Controller\Admin;

use App\Entity\Region;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class RegionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Region::class;
    }

    public function configureFields(string $pageName): iterable
    {
            yield IdField::new('id')->onlyOnIndex();
            yield TextField::new('name');
            yield AssociationField::new('partRegion')->setFormTypeOptions(
                ['choice_label' => 'name',
                 'required' => true,
                 'multiple' => false   
                ]
            );
            yield TextField::new('lien');
            yield TextField::new('danger');
            yield TextField::new('image');
            yield TextareaField::new('description');
    }
}
