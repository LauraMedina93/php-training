<?php

namespace Info\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
}
