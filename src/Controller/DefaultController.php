<?php
/**
* Created by PhpStorm.
* User: Richard
* Date: 18/10/2019
* Time: 13:43
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