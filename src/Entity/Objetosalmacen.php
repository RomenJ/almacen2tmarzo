<?php

namespace App\Entity;

use App\Repository\ObjetosalmacenRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObjetosalmacenRepository::class)]
class Objetosalmacen
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $descripcion = null;

    #[ORM\Column(nullable: true)]
    private ?int $cantidad = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ubicacion = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $entradaalmacen = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $salidaalmacen = null;

    #[ORM\OneToMany(mappedBy: 'Objetosalmacen', targetEntity: Registroentrada::class)]
    private Collection $registroentradas;

    #[ORM\OneToMany(mappedBy: 'objeto', targetEntity: Registrosalida::class)]
    private Collection $registrosalidas;

    public function __construct()
    {
        $this->registroentradas = new ArrayCollection();
        $this->registrosalidas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(?int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getUbicacion(): ?string
    {
        return $this->ubicacion;
    }

    public function setUbicacion(?string $ubicacion): self
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    public function getEntradaalmacen(): ?\DateTimeInterface
    {
        return $this->entradaalmacen;
    }

    public function setEntradaalmacen(?\DateTimeInterface $entradaalmacen): self
    {
        $this->entradaalmacen = $entradaalmacen;

        return $this;
    }

    public function getSalidaalmacen(): ?\DateTimeInterface
    {
        return $this->salidaalmacen;
    }

    public function setSalidaalmacen(?\DateTimeInterface $salidaalmacen): self
    {
        $this->salidaalmacen = $salidaalmacen;

        return $this;
    }

    /**
     * @return Collection<int, Registroentrada>
     */
    public function getRegistroentradas(): Collection
    {
        return $this->registroentradas;
    }

    public function addRegistroentrada(Registroentrada $registroentrada): self
    {
        if (!$this->registroentradas->contains($registroentrada)) {
            $this->registroentradas->add($registroentrada);
            $registroentrada->setObjetosalmacen($this);
        }

        return $this;
    }

    public function removeRegistroentrada(Registroentrada $registroentrada): self
    {
        if ($this->registroentradas->removeElement($registroentrada)) {
            // set the owning side to null (unless already changed)
            if ($registroentrada->getObjetosalmacen() === $this) {
                $registroentrada->setObjetosalmacen(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
      return $this->descripcion;  // getTitulo() se hereda de BaseArticulo
    }

    /**
     * @return Collection<int, Registrosalida>
     */
    public function getRegistrosalidas(): Collection
    {
        return $this->registrosalidas;
    }

    public function addRegistrosalida(Registrosalida $registrosalida): self
    {
        if (!$this->registrosalidas->contains($registrosalida)) {
            $this->registrosalidas->add($registrosalida);
            $registrosalida->setObjeto($this);
        }

        return $this;
    }

    public function removeRegistrosalida(Registrosalida $registrosalida): self
    {
        if ($this->registrosalidas->removeElement($registrosalida)) {
            // set the owning side to null (unless already changed)
            if ($registrosalida->getObjeto() === $this) {
                $registrosalida->setObjeto(null);
            }
        }

        return $this;
    }
}
