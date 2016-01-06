<?php

namespace AppartooBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppartooBundle:Default:index.html.twig');
    }
}
