<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomcomplet;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\profil", inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idprofil;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\partenaire", inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idpartenaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomcomplet(): ?string
    {
        return $this->nomcomplet;
    }

    public function setNomcomplet(string $nomcomplet): self
    {
        $this->nomcomplet = $nomcomplet;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getIdprofil(): ?profil
    {
        return $this->idprofil;
    }

    public function setIdprofil(?profil $idprofil): self
    {
        $this->idprofil = $idprofil;

        return $this;
    }

    public function getIdpartenaire(): ?partenaire
    {
        return $this->idpartenaire;
    }

    public function setIdpartenaire(?partenaire $idpartenaire): self
    {
        $this->idpartenaire = $idpartenaire;

        return $this;
    }
}
