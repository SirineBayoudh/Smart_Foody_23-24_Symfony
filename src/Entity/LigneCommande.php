<?php

namespace App\Entity;

use App\Repository\LigneCommandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LigneCommandeRepository::class)]
class LigneCommande
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer", name: "id_lc")]
    private $idLc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=true)
     */
    private $idCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_panier", type="integer", nullable=true)
     */
    private $idPanier;

    /**
     * @var int
     *
     * @ORM\Column(name="ref_produit", type="integer", nullable=false)
     */
    private $refProduit;

    public function getIdLc(): ?int
    {
        return $this->idLc;
    }

    public function getIdCommande(): ?int
    {
        return $this->idCommande;
    }

    public function setIdCommande(?int $idCommande): static
    {
        $this->idCommande = $idCommande;

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

    public function getIdPanier(): ?int
    {
        return $this->idPanier;
    }

    public function setIdPanier(?int $idPanier): static
    {
        $this->idPanier = $idPanier;

        return $this;
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


}
