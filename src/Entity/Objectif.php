<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objectif
 *
 * @ORM\Table(name="objectif")
 * @ORM\Entity
 */
class Objectif
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_obj", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObj;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="listCritere", type="string", length=255, nullable=false)
     */
    private $listcritere;

    public function getIdObj(): ?int
    {
        return $this->idObj;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getListcritere(): ?string
    {
        return $this->listcritere;
    }

    public function setListcritere(string $listcritere): static
    {
        $this->listcritere = $listcritere;

        return $this;
    }


}
