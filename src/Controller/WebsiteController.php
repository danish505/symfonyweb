<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use App\Services\GiftService;
use Symfony\Component\HttpFoundation\Cookie;



class WebsiteController extends AbstractController
{
    /**
     * @Route("/", name="website")
     */
    public function index(GiftService $gift)
    {
       
        
        // shuffle($gift);
        $i = 0;
        foreach($gift as $key):
             
           
            
            echo "<br/> adam has ". $key[$i];
            $i++;
            echo "<br/> Dan has " .$key[$i];
            $i++;
            echo "<br/> Sal has " .$key[$i];
            $i++;
            echo "<br/> Rahil has ". $key[$i];

        endforeach;

        return $this->render('website/index.html.twig', [
            'controller_name' => 'WebsiteController',
        ]);
    }

    
    /**
     *  @Route("/blog/{slug}",name = "list") 
     */
    
    
    public function index2(string $slug,Request $request ):Response{

        $id = $request->query->get("id","default");
        
        echo "accept only int $slug + $id";
        $cookie = new Cookie(
            "my_cookie",
            "cookie value",
            time() + (2*365*24*60*60)
        );

       


        $res = new Response();
        $res->headers->setCookie($cookie);
        $res->send();
        
        return new Response("done");

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
