<?php

// src/Wiki/WikiMaireBundle/DataFixtures/ORM/LoadUserData.php

namespace AppartooBundle\DataFixtures\ORM;

use AppartooBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        // Get our userManager, you must implement `ContainerAwareInterface`
        $userManager = $this->getUserManager();

        // Creation de User et des details
        $user1 = $userManager->createUser();
        $user1->setUsername('test');
        $user1->setPlainPassword('test');
        $user1->setEnabled(true);
        $user1->setEmail('mahamadoutraore1@gmail.com');
        $user1->setNom('Traore');
        $user1->setPrenom('Mahamadou');
        $user1->setTelephone('0768298272');
        $user1->setAdresse('18 Rue de la Gare');

        $user2 = $userManager->createUser();
        $user2->setUsername('bekele');
        $user2->setPlainPassword('bekele');
        $user2->setEnabled(true);
        $user2->setEmail('mahamadoutraore11@gmail.com');
        $user2->setNom('Traore');
        $user2->setPrenom('Mahamadou Ibn Falaye');
        $user2->setTelephone('0768298272');
        $user2->setAdresse('18 Rue de la Gare');

        $user3 = $userManager->createUser();
        $user3->setUsername('momo');
        $user3->setPlainPassword('momo');
        $user3->setEnabled(true);
        $user3->setEmail('mahamadoutraore111@gmail.com');
        $user3->setNom('Traore');
        $user3->setPrenom('Momo ');
        $user3->setTelephone('0768298272');
        $user3->setAdresse('18 Rue de la Gare');

        $user4 = $userManager->createUser();
        $user4->setUsername('bobo');
        $user4->setPlainPassword('bobo');
        $user4->setEnabled(true);
        $user4->setEmail('mahamadoutraore1111@gmail.com');
        $user4->setNom('Traore');
        $user4->setPrenom('Bobo');
        $user4->setTelephone('0768298272');
        $user4->setAdresse('18 Rue de la Gare');




        // Mise a jour des utilisateurs
        $userManager->updateUser($user1, true);
        $userManager->updateUser($user2, true);
        $userManager->updateUser($user3, true);
        $userManager->updateUser($user4, true);


    }

    public function getSecurityManager()
    {
        return $this->container->get('security.encoder_factory');
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @return \Sonata\UserBundle\Model\UserManagerInterface
     */
    public function getUserManager()
    {
        return $this->container->get('fos_user.user_manager');
    }

    public function getOrder()
    {
        return 1; // ordre d'appel
    }
}