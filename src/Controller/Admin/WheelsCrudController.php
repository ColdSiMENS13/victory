<?php

namespace App\Controller\Admin;

use App\Entity\Wheels;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class WheelsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Wheels::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Wheel Brand')
            ->setEntityLabelInPlural('Wheel Brands');
    }


    public function configureFields(string $pageName): iterable
    {
            yield IdField::new('id');
            yield AssociationField::new('wheelsBrand');
            yield TextField::new('wheelsDiameter');
            yield IntegerField::new('wheelsHeight');
            yield IntegerField::new('wheelsWidth');
    }
}
