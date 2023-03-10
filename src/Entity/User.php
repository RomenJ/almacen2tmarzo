<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['username'], message: 'There is already an account with this username')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $username = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Registroentrada::class)]
    private Collection $registroentradas;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Registrosalida::class)]
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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

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
            $registroentrada->setUser($this);
        }

        return $this;
    }

    public function removeRegistroentrada(Registroentrada $registroentrada): self
    {
        if ($this->registroentradas->removeElement($registroentrada)) {
            // set the owning side to null (unless already changed)
            if ($registroentrada->getUser() === $this) {
                $registroentrada->setUser(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
      return $this->username;  // getTitulo() se hereda de BaseArticulo
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
            $registrosalida->setUser($this);
        }

        return $this;
    }

    public function removeRegistrosalida(Registrosalida $registrosalida): self
    {
        if ($this->registrosalidas->removeElement($registrosalida)) {
            // set the owning side to null (unless already changed)
            if ($registrosalida->getUser() === $this) {
                $registrosalida->setUser(null);
            }
        }

        return $this;
    }
}
