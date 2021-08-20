<?php

namespace App\Entity;

use App\Repository\ArchivoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArchivoRepository::class)
 */
class Archivo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombreArchivo;

    /**
     * @ORM\ManyToOne(targetEntity=Egresado::class, inversedBy="archivos")
     */
    private $egresado;

    /**
     * @ORM\ManyToOne(targetEntity=EgresadoSoporte::class, inversedBy="archivos")
     */
    private $egresadoSoporte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreArchivo(): ?string
    {
        return $this->nombreArchivo;
    }

    public function setNombreArchivo(?string $nombreArchivo): self
    {
        $this->nombreArchivo = $nombreArchivo;

        return $this;
    }

    public function getEgresado(): ?Egresado
    {
        return $this->egresado;
    }

    public function setEgresado(?Egresado $egresado): self
    {
        $this->egresado = $egresado;

        return $this;
    }

    public function getEgresadoSoporte(): ?EgresadoSoporte
    {
        return $this->egresadoSoporte;
    }

    public function setEgresadoSoporte(?EgresadoSoporte $egresadoSoporte): self
    {
        $this->egresadoSoporte = $egresadoSoporte;

        return $this;
    }
}
