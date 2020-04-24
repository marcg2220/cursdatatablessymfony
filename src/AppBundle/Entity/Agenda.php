<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agenda
 *
 * @ORM\Table(name="agenda")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AgendaRepository")
 */
class Agenda
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
     * @ORM\ManyToOne(targetEntity="Disponibilitat", inversedBy="agendes")
     * @ORM\JoinColumn(name="disponibilitat_id", referencedColumnName="id")
     */
    private $disponibilitat;

    /**
     * @ORM\ManyToOne(targetEntity="Usuari", inversedBy="agendes")
     * @ORM\JoinColumn(name="usuari_id", referencedColumnName="id")
     */
    private $usuari;

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
     * Set disponibilitat
     *
     * @param \AppBundle\Entity\Disponibilitat $disponibilitat
     *
     * @return Agenda
     */
    public function setDisponibilitat(\AppBundle\Entity\Disponibilitat $disponibilitat = null)
    {
        $this->disponibilitat = $disponibilitat;

        return $this;
    }

    /**
     * Get disponibilitat
     *
     * @return \AppBundle\Entity\Disponibilitat
     */
    public function getDisponibilitat()
    {
        return $this->disponibilitat;
    }

    /**
     * Set usuari
     *
     * @param \AppBundle\Entity\Usuari $usuari
     *
     * @return Agenda
     */
    public function setUsuari(\AppBundle\Entity\Usuari $usuari = null)
    {
        $this->usuari = $usuari;

        return $this;
    }

    /**
     * Get usuari
     *
     * @return \AppBundle\Entity\Usuari
     */
    public function getUsuari()
    {
        return $this->usuari;
    }
}
