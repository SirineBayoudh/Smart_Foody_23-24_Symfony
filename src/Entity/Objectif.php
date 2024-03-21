<?php

namespace App\Entity;

use App\Repository\ObjectifRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObjectifRepository::class)]
class Objectif
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer", name: "id_obj")]
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
