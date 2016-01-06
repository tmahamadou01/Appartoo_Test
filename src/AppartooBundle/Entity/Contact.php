<?php

namespace AppartooBundle\Entity;

/**
 * Contact
 */
class Contact
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idContact;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idContact
     *
     * @param integer $idContact
     *
     * @return Contact
     */
    public function setIdContact($idContact)
    {
        $this->idContact = $idContact;

        return $this;
    }

    /**
     * Get idContact
     *
     * @return int
     */
    public function getIdContact()
    {
        return $this->idContact;
    }
}

