<?php

namespace App\Entity;

use App\Repository\RegistroRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RegistroRepository::class)
 */
class Registro
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $IdInstructor;

    /**
     * @ORM\Column(type="integer")
     */
    private $IdEstudiante;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdInstructor(): ?int
    {
        return $this->IdInstructor;
    }

    public function setIdInstructor(int $IdInstructor): self
    {
        $this->IdInstructor = $IdInstructor;

        return $this;
    }

    public function getIdEstudiante(): ?int
    {
        return $this->IdEstudiante;
    }

    public function setIdEstudiante(int $IdEstudiante): self
    {
        $this->IdEstudiante = $IdEstudiante;

        return $this;
    }
}
