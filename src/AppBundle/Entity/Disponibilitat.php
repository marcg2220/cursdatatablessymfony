<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disponibilitat
 *
 * @ORM\Table(name="disponibilitat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DisponibilitatRepository")
 */
class Disponibilitat
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
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date")
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time")
     */
    private $hora;

    /**
     * @ORM\OneToMany(targetEntity="Agenda", mappedBy="disponibilitat")
     */
    private $disponibilitats;

    public function __construct()
    {
        $this->disponibilitats = new ArrayCollection();
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
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Disponibilitat
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     *
     * @return Disponibilitat
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Add disponibilitat
     *
     * @param \AppBundle\Entity\Agenda $disponibilitat
     *
     * @return Disponibilitat
     */
    public function addDisponibilitat(\AppBundle\Entity\Agenda $disponibilitat)
    {
        $this->disponibilitats[] = $disponibilitat;

        return $this;
    }

    /**
     * Remove disponibilitat
     *
     * @param \AppBundle\Entity\Agenda $disponibilitat
     */
    public function removeDisponibilitat(\AppBundle\Entity\Agenda $disponibilitat)
    {
        $this->disponibilitats->removeElement($disponibilitat);
    }

    /**
     * Get disponibilitats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDisponibilitats()
    {
        return $this->disponibilitats;
    }
}
