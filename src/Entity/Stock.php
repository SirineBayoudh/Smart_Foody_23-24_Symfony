<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock")
 * @ORM\Entity
 */
class Stock
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_s", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idS;

    /**
     * @var int
     *
     * @ORM\Column(name="ref_produit", type="integer", nullable=false)
     */
    private $refProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbVendu", type="integer", nullable=true)
     */
    private $nbvendu;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cout", type="float", precision=10, scale=0, nullable=true)
     */
    private $cout;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=255, nullable=false)
     */
    private $marque;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_arrivage", type="date", nullable=true)
     */
    private $dateArrivage;

    public function getIdS(): ?int
    {
        return $this->idS;
    }

    public function getRefProduit(): ?int
    {
        return $this->refProduit;
    }

    public function setRefProduit(int $refProduit): static
    {
        $this->refProduit = $refProduit;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getNbvendu(): ?int
    {
        return $this->nbvendu;
    }

    public function setNbvendu(?int $nbvendu): static
    {
        $this->nbvendu = $nbvendu;

        return $this;
    }

    public function getCout(): ?float
    {
        return $this->cout;
    }

    public function setCout(?float $cout): static
    {
        $this->cout = $cout;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getDateArrivage(): ?\DateTimeInterface
    {
        return $this->dateArrivage;
    }

    public function setDateArrivage(?\DateTimeInterface $dateArrivage): static
    {
        $this->dateArrivage = $dateArrivage;

        return $this;
    }


}
