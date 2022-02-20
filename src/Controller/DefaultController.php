<?php
/**
* Created by user.
* User: abdo
* Date: 18/01/2022
*/

namespace App\Controller;

use App\Repository\PostRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /** 
    *@Route("/", name="home")
    */
    
   public function index(PostRepository $postRepository, Request $request, PaginatorInterface $paginator): Response
   {
        
        $query = $postRepository->findAll();


        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            3 /*limit per page*/
        );



       return $this->render('Default/index.html.twig', [
        'posts' => $pagination,
    ]);
   }
   

}

