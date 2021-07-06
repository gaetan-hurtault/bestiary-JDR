<?php

namespace App\Controller\Admin;

use App\Entity\PartRegion;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PartRegionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PartRegion::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
