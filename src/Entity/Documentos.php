<?php

namespace App\Entity;

use App\Repository\DocumentosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocumentosRepository::class)
 */
class Documentos
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
    private $tipoDocumento;

    /**
     * @ORM\OneToMany(targetEntity=Egresado::class, mappedBy="documentoEmitido", cascade={"remove"})
     */
    private $egresados;

    public function __construct()
    {
        $this->egresados = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoDocumento(): ?string
    {
        return $this->tipoDocumento;
    }

    public function setTipoDocumento(string $tipoDocumento): self
    {
        $this->tipoDocumento = $tipoDocumento;

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
            $egresado->setDocumentoEmitido($this);
        }

        return $this;
    }

    public function removeEgresado(Egresado $egresado): self
    {
        if ($this->egresados->removeElement($egresado)) {
            // set the owning side to null (unless already changed)
            if ($egresado->getDocumentoEmitido() === $this) {
                $egresado->setDocumentoEmitido(null);
            }
        }

        return $this;
    }

}
