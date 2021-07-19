<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use App\GiftService;



class WebsiteController extends AbstractController
{
    /**
     * @Route("/", name="website")
     */
    public function index(GiftService $gift)
    {
       
        
        shuffle($gift);

        foreach($gift as $key):

            echo "adam has". $key;
            echo "Dan has" .$key;
            echo "Sal has" .$key;
            echo "Rahil has". $key;

        endforeach;
        
        // return $this->render('website/index.html.twig', [
        //     'controller_name' => 'WebsiteController',
        // ]);
    }

    /**
     * @Route("/create", name="create")
     */

    public function create(): Response{

        $user = new Users();
        // $this->getDoctrine()->getManager();
        $entity = $this->getDoctrine()->getManager();

        $user->setName("dan");

        $user->setEmail("dan@gmail.com");

        $pass = md5("password");

        $user->setPassword($pass);

        $entity->persist($user);

        $entity->flush();

        return new Response("done");
    }
}
