<?php

namespace App\Entity;

use App\Repository\TitulacionesAlcanzadasRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TitulacionesAlcanzadasRepository::class)
 */
class TitulacionesAlcanzadas
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
    private $nroResolucionMinisterial;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nroResolucionUnraf;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fechaEgreso;

 

    /**
     * @ORM\ManyToOne(targetEntity=GraduadoSoporte::class, inversedBy="titulaciones")
     */
    private $graduadoSoporte;

    /**
     * @ORM\ManyToOne(targetEntity=Titulos::class, inversedBy="titulacionesAlcanzadas")
     */
    private $tituloOtorgado;

    /**
     * @ORM\ManyToOne(targetEntity=Graduado::class, inversedBy="titulaciones")
     */
    private $graduado;

 



    public function getId(): ?int
    {
        return $this->id;
    }



    public function getNroResolucionMinisterial(): ?string
    {
        return $this->nroResolucionMinisterial;
    }

    public function setNroResolucionMinisterial(string $nroResolucionMinisterial): self
    {
        $this->nroResolucionMinisterial = $nroResolucionMinisterial;

        return $this;
    }

    public function getNroResolucionUnraf(): ?string
    {
        return $this->nroResolucionUnraf;
    }

    public function setNroResolucionUnraf(string $nroResolucionUnraf): self
    {
        $this->nroResolucionUnraf = $nroResolucionUnraf;

        return $this;
    }

    public function getFechaEgreso(): ?\DateTimeInterface
    {
        return $this->fechaEgreso;
    }

    public function setFechaEgreso(\DateTimeInterface $fechaEgreso): self
    {
        $this->fechaEgreso = $fechaEgreso;

        return $this;
    }



    public function getGraduadoSoporte(): ?GraduadoSoporte
    {
        return $this->graduadoSoporte;
    }

    public function setGraduadoSoporte(?GraduadoSoporte $graduadoSoporte): self
    {
        $this->graduadoSoporte = $graduadoSoporte;

        return $this;
    }

    public function getTituloOtorgado(): ?Titulos
    {
        return $this->tituloOtorgado;
    }

    public function setTituloOtorgado(?Titulos $tituloOtorgado): self
    {
        $this->tituloOtorgado = $tituloOtorgado;

        return $this;
    }

    public function getGraduado(): ?Graduado
    {
        return $this->graduado;
    }

    public function setGraduado(?Graduado $graduado): self
    {
        $this->graduado = $graduado;

        return $this;
    }


}
