<?php

namespace AppartooBundle\Controller;

use AppartooBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
    public function inscriptionAction($id)
    {

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        if($em->getRepository('AppartooBundle:Contact')->findOneBy(array('idContact' => $id, 'user' => $user)) == NULL ) {

            // Inscription
            $entity = new Contact();
            $entity->setUser($user);
            $entity->setIdContact($id);

            $em->persist($entity);
            $em->flush();

        }
        return $this->redirect($this->generateUrl('appartoo_list'));
    }

    public function contactAction($id = null)
    {
        $modelcontact = [];
        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();

        $contacts = $em->getRepository('AppartooBundle:Contact')->findByUser($user);
        $con = $em->getRepository('AppartooBundle:User')->findAll();
        foreach ($contacts as $contact){
            foreach ($con as $co){
                if ($co->getId() == $contact->getIdContact()) {
                    $modelcontact[$contact->getId()] = $co;
                }
            }
        }

        return $this->render('AppartooBundle:Default:contacts.html.twig', array(
            'contacts'   => $modelcontact,
            'user'     => $user,
            'con'   => $con
        ));
    }

    public function deleteAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AppartooBundle:Contact')->findOneBy(array('idContact' => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find contact entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('appartoo_contact'));
    }


}

