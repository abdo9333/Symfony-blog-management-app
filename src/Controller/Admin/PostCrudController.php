<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PostCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Post::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title','Titre')->SetColumns('8'),
            TextEditorField::new('discription', "Contenu")->SetColumns('8'),
            TextareaField::new('imageFile')->setFormType(VichImageType::class),
            AssociationField::new('auther', 'User'),
        ];
    }
    
}
