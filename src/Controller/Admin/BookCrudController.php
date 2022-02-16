<?php

namespace App\Controller\Admin;

use App\Entity\Book;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;

class BookCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Book::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        
        return [
            TextField::new('title','Titre')->SetColumns('12'),
            AssociationField::new('category', 'catégorie :')->SetColumns('12'),
            TextEditorField::new('description' , 'Discription')->SetColumns('12'),
            DateField::new('publishAt', 'Date de publication')->SetColumns('12')->hideOnIndex(),
            TextField::new('auther' , 'Auteur')->SetColumns('12'),
            NumberField::new('nbPage' , "Nombre de pages")->SetColumns('12')->hideOnIndex(),
            TextField::new('image')->SetColumns('12'),
            BooleanField::new('isActive' , 'Disponible')->SetColumns('12'),
            AssociationField::new('user', 'Créer par : ')->SetColumns('12'),
        ];
        
    }
    
}
