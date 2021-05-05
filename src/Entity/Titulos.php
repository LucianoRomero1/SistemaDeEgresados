<?php

namespace App\Entity;

use App\Repository\TitulosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TitulosRepository::class)
 */
class Titulos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombreTitulo;

    /**
     * @ORM\OneToMany(targetEntity=Egresado::class, mappedBy="tituloOtorgado")
     */
    private $egresados;

    /**
     * @ORM\OneToMany(targetEntity=TitulacionesAlcanzadas::class, mappedBy="tituloOtorgado")
     */
    private $titulacionesAlcanzadas;





    public function __construct()
    {
        $this->egresados = new ArrayCollection();
        $this->titulacionesAlcanzadas = new ArrayCollection();
        
    }



   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreTitulo(): ?string
    {
        return $this->nombreTitulo;
    }

    public function setNombreTitulo(string $nombreTitulo): self
    {
        $this->nombreTitulo = $nombreTitulo;

        return $this;
    }

    /**
     * @return Collection|Egresado[]
     */
    public function getEgresados(): Collection
    {
        return $this->egresados;
    }

    public function addEgresado(Egresado $egresado): self
    {
        if (!$this->egresados->contains($egresado)) {
            $this->egresados[] = $egresado;
            $egresado->setTituloOtorgado($this);
        }

        return $this;
    }

    public function removeEgresado(Egresado $egresado): self
    {
        if ($this->egresados->removeElement($egresado)) {
            // set the owning side to null (unless already changed)
            if ($egresado->getTituloOtorgado() === $this) {
                $egresado->setTituloOtorgado(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TitulacionesAlcanzadas[]
     */
    public function getTitulacionesAlcanzadas(): Collection
    {
        return $this->titulacionesAlcanzadas;
    }

    public function addTitulacionesAlcanzada(TitulacionesAlcanzadas $titulacionesAlcanzada): self
    {
        if (!$this->titulacionesAlcanzadas->contains($titulacionesAlcanzada)) {
            $this->titulacionesAlcanzadas[] = $titulacionesAlcanzada;
            $titulacionesAlcanzada->setTituloOtorgado($this);
        }

        return $this;
    }

    public function removeTitulacionesAlcanzada(TitulacionesAlcanzadas $titulacionesAlcanzada): self
    {
        if ($this->titulacionesAlcanzadas->removeElement($titulacionesAlcanzada)) {
            // set the owning side to null (unless already changed)
            if ($titulacionesAlcanzada->getTituloOtorgado() === $this) {
                $titulacionesAlcanzada->setTituloOtorgado(null);
            }
        }

        return $this;
    }

 


}
