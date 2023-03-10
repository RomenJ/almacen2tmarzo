<?php

namespace App\Entity;

use App\Repository\RegistroentradaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RegistroentradaRepository::class)]
class Registroentrada
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\ManyToOne(inversedBy: 'registroentradas')]
    private ?Objetosalmacen $Objetosalmacen = null;

    #[ORM\ManyToOne(inversedBy: 'registroentradas')]
    private ?User $user = null;

    #[ORM\Column]
    private ?int $cantidad = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getObjetosalmacen(): ?Objetosalmacen
    {
        return $this->Objetosalmacen;
    }

    public function setObjetosalmacen(?Objetosalmacen $Objetosalmacen): self
    {
        $this->Objetosalmacen = $Objetosalmacen;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }
}
