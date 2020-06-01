<?php
    
namespace App\Controller;

use App\Entity\Post;
use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    
class DefaultController extends AbstractController
{
    /**
     * @Route("/{reactRouting}", name="home", defaults={"reactRouting": null})
     */
    public function index()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/api/users", name="users")
     * 
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getUsers()
    {
        return new JsonResponse($this->getDoctrine()->getRepository(User::class)->findall(), JsonResponse::HTTP_OK);
    }

    /**
     * @Route("/api/posts", name="posts")
     */
    public function getPosts(): JsonResponse
    {
        return new JsonResponse($this->getDoctrine()->getRepository(Post::class)->findall(), JsonResponse::HTTP_OK);
    }
}
