<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Alerte
 *
 * @ORM\Table(name="alerte")
 * @ORM\Entity
 */
class Alerte
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_alerte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAlerte;

    /**
     * @var int
     *
     * @ORM\Column(name="id_stock", type="integer", nullable=false)
     */
    private $idStock;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_alerte", type="string", length=255, nullable=true)
     */
    private $descriptionAlerte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_alerte", type="date", nullable=false)
     */
    private $dateAlerte;

    /**
     * @var bool
     *
     * @ORM\Column(name="Type", type="boolean", nullable=false)
     */
    private $type;

    public function getIdAlerte(): ?int
    {
        return $this->idAlerte;
    }

    public function getIdStock(): ?int
    {
        return $this->idStock;
    }

    public function setIdStock(int $idStock): static
    {
        $this->idStock = $idStock;

        return $this;
    }

    public function getDescriptionAlerte(): ?string
    {
        return $this->descriptionAlerte;
    }

    public function setDescriptionAlerte(?string $descriptionAlerte): static
    {
        $this->descriptionAlerte = $descriptionAlerte;

        return $this;
    }

    public function getDateAlerte(): ?\DateTimeInterface
    {
        return $this->dateAlerte;
    }

    public function setDateAlerte(\DateTimeInterface $dateAlerte): static
    {
        $this->dateAlerte = $dateAlerte;

        return $this;
    }

    public function isType(): ?bool
    {
        return $this->type;
    }

    public function setType(bool $type): static
    {
        $this->type = $type;

        return $this;
    }


}
