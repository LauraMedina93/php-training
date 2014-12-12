<?php

namespace Info\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Info\InfoBundle\Entity\Post;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/info/fake", name="_info_fake")
     * @Template()
     */
    public function fakeAction()
    {
        return $this->render('InfoInfoBundle:Default:fake.html.twig');
    }
    
    /**
     * @Route("/info/add/{name}", name="_info_add")
     * @Template()
     */
    
    public function doctrineAction($name)
    {
        $em = $this->getDoctrine()->getManager();
        $post = new Post;
        $post->setDescription($name);
        $post->setDate(new \DateTime());
        $em->persist($post);
        $em->flush();
        
        return $this->render('InfoInfoBundle:Default:doctrine.html.twig',
                array('object' => $post->getDescription()));
    }
    
   
}
