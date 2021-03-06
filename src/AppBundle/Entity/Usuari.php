<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuari
 *
 * @ORM\Table(name="usuari")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuariRepository")
 */
class Usuari
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="cognoms", type="string", length=45)
     */
    private $cognoms;

    /**
     * @var string
     *
     * @ORM\Column(name="document", type="string", length=45)
     */
    private $document;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefon", type="string", length=255)
     */
    private $telefon;

    /**
     * @var int
     *
     * @ORM\Column(name="pais", type="integer")
     */
    private $pais;

    /**
     * @ORM\OneToMany(targetEntity="Agenda", mappedBy="usuari")
     */
    private $usuaris;

    public function __construct()
    {
        $this->usuaris = new ArrayCollection();
    }


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Usuari
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set cognoms
     *
     * @param string $cognoms
     *
     * @return Usuari
     */
    public function setCognoms($cognoms)
    {
        $this->cognoms = $cognoms;

        return $this;
    }

    /**
     * Get cognoms
     *
     * @return string
     */
    public function getCognoms()
    {
        return $this->cognoms;
    }

    /**
     * Set document
     *
     * @param string $document
     *
     * @return Usuari
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuari
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefon
     *
     * @param string $telefon
     *
     * @return Usuari
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get telefon
     *
     * @return string
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set pais
     *
     * @param integer $pais
     *
     * @return Usuari
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return int
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Add usuari
     *
     * @param \AppBundle\Entity\Agenda $usuari
     *
     * @return Usuari
     */
    public function addUsuari(\AppBundle\Entity\Agenda $usuari)
    {
        $this->usuaris[] = $usuari;

        return $this;
    }

    /**
     * Remove usuari
     *
     * @param \AppBundle\Entity\Agenda $usuari
     */
    public function removeUsuari(\AppBundle\Entity\Agenda $usuari)
    {
        $this->usuaris->removeElement($usuari);
    }

    /**
     * Get usuaris
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuaris()
    {
        return $this->usuaris;
    }
}
