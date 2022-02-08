<?php
/**
* Created by user.
* User: abdo
* Date: 18/01/2022
*/

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /** 
    *@Route("/home", name="home")
    */
    
   public function index(): Response
   {
       return $this->render('Default/index.html.twig');
   }
   

}