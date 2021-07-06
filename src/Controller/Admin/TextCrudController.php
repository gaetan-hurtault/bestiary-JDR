<?php

namespace App\Controller\Admin;

use App\Entity\Text;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TextCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Text::class;
    }

    public function configureFields(string $pageName): iterable
    {
            yield IdField::new('id')->onlyOnIndex();
            yield TextField::new('title');
            yield ChoiceField::new('part')->setChoices([
                'Les Indispensables' => "<i class='fas fa-biohazard'></i>Les Indispensables",
                'Les Groupes' => "<i class='<i class='fas fa-atom'></i>'></i>Les Groupes",
                'Les Races' => "<i class='fas fa-dna'></i>Les Races",
                'Tokyo 3' => "<i class='fab fa-galactic-senate'></i>Tokyo 3",
                'Le Lore' => "<i class='fas fa-globe'></i>Le Lore (Facultatif)",
            ]);
            yield TextField::new('background');
            yield TextareaField::new('description');
    }
}
