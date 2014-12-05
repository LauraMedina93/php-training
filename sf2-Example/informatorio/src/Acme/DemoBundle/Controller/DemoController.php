<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Response;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DemoController extends Controller
{
    /**
     * @Route("/", name="_demo")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/hello/{name}", name="_demo_hello")
     * @Template()
     */
    public function helloAction($name)
    {
        return array('name' => $name);
    }
    
    /**
     * @Route("/informatorio/{name}", name="_demo_informatorio")
     * @Template()
     */
    public function informatorioAction($name)
    {
        return array('name' => $name);
    }
    
    /**
     * @Route("/component1", name="_demo_component1")
     * @Template()
     */
    public function component1Action()
    {
        $response = new Response('<b> <i>Soy Reutilizable </i> </b>');
        
        return $response;
    }

    /**
     * @Route("/from", name="_demo_from")
     * @Template()
     */
    public function fromAction()
    {
        $urlDestino = $this->generateUrl('_demo_to', array ('name' => '1254'));
        return $this->redirect($urlDestino);
    }

    /**
     * @Route("/to/{name}", name="_demo_to")
     * @Template()
     */
    public function toAction($name)
    {
        return new Response("<h1>Redirected to $name!</h1>");
    }
    
    /**
     * @Route("/forward", name="_demo_forward")
     * @Template()
     */
    public function forwardAction()
    {
        return $this->forward(
                'AcmeDemoBundle:Demo:return', 
                    array('param' => '125488'));
    }
    /**
     * @Route("/return", name="_demo_return")
     * @Template()
     */
    public function returnAction($param)
    {
        return new Response("Esto es nuevo $param");
    }
    
    /**
     * @Route("/fake", name="_demo_fake")
     * @Template()
     */
    public function fakeAction()
    {
        throw $this->createNotFoundException('La página no se encuentra disponible');
    }

    /**
     * @Route("/parameter", name="_demo_parameter")
     * @Template()
     */
    public function parameterAction(Request $request)
    {
        $isAjax = $request->isXmlHttpRequest(); //para datos Ajax
        $post = $request->request->get('dato'); //para datos POST
        return new Response ('I am here ' . $request->query->get('dato')); //para datos GET
    }
    
    /**
     * @Route("/contact", name="_demo_contact")
     * @Template()
     */
    public function contactAction(Request $request)
    {
        $form = $this->createForm(new ContactType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $mailer = $this->get('mailer');

            // .. setup a message and send it
            // http://symfony.com/doc/current/cookbook/email.html

            $request->getSession()->getFlashBag()->set('notice', 'Message sent!');

            return new RedirectResponse($this->generateUrl('_demo'));
        }

        return array('form' => $form->createView());
    }
}
