<?php

namespace AppartooBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateurController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppartooBundle:User')->findAll();

        return $this->render('AppartooBundle:Default:list.html.twig', array(
            'entities' => $entities,
        ));
    }
}

