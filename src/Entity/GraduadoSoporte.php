<?php

namespace App\Entity;

use App\Repository\GraduadoSoporteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GraduadoSoporteRepository::class)
 */
class GraduadoSoporte
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
    private $apellido;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $documentoIdentidad;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tipoDocumentoIdentidad;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nacionalidad;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ciudad;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $provincia;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $calle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroCalle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $piso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $depto;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @ORM\OneToMany(targetEntity=TitulacionesAlcanzadas::class, mappedBy="graduadoSoporte", cascade={"persist", "remove"})
     */
    private $titulaciones;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titulo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nroME;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nroUnraf;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fechaEgreso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imagenTED;

    public function __construct()
    {
        $this->titulaciones = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(?string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDocumentoIdentidad(): ?string
    {
        return $this->documentoIdentidad;
    }

    public function setDocumentoIdentidad(?string $documentoIdentidad): self
    {
        $this->documentoIdentidad = $documentoIdentidad;

        return $this;
    }

    public function getTipoDocumentoIdentidad(): ?string
    {
        return $this->tipoDocumentoIdentidad;
    }

    public function setTipoDocumentoIdentidad(?string $tipoDocumentoIdentidad): self
    {
        $this->tipoDocumentoIdentidad = $tipoDocumentoIdentidad;

        return $this;
    }

    public function getNacionalidad(): ?string
    {
        return $this->nacionalidad;
    }

    public function setNacionalidad(?string $nacionalidad): self
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(?string $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(?string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getCalle(): ?string
    {
        return $this->calle;
    }

    public function setCalle(?string $calle): self
    {
        $this->calle = $calle;

        return $this;
    }

    public function getNumeroCalle(): ?string
    {
        return $this->numeroCalle;
    }

    public function setNumeroCalle(?string $numeroCalle): self
    {
        $this->numeroCalle = $numeroCalle;

        return $this;
    }

    public function getPiso(): ?string
    {
        return $this->piso;
    }

    public function setPiso(?string $piso): self
    {
        $this->piso = $piso;

        return $this;
    }

    public function getDepto(): ?string
    {
        return $this->depto;
    }

    public function setDepto(?string $depto): self
    {
        $this->depto = $depto;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
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

    public function getFechaNacimiento(): ?\DateTimeInterface
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(?\DateTimeInterface $fechaNacimiento): self
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * @return Collection|TitulacionesAlcanzadas[]
     */
    public function getTitulaciones(): Collection
    {
        return $this->titulaciones;
    }

    public function addTitulacione(TitulacionesAlcanzadas $titulacione): self
    {
        if (!$this->titulaciones->contains($titulacione)) {
            $this->titulaciones[] = $titulacione;
            $titulacione->setGraduadoSoporte($this);
        }

        return $this;
    }

    public function removeTitulacione(TitulacionesAlcanzadas $titulacione): self
    {
        if ($this->titulaciones->removeElement($titulacione)) {
            // set the owning side to null (unless already changed)
            if ($titulacione->getGraduadoSoporte() === $this) {
                $titulacione->setGraduadoSoporte(null);
            }
        }

        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(?string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getNroME(): ?string
    {
        return $this->nroME;
    }

    public function setNroME(?string $nroME): self
    {
        $this->nroME = $nroME;

        return $this;
    }

    public function getNroUnraf(): ?string
    {
        return $this->nroUnraf;
    }

    public function setNroUnraf(?string $nroUnraf): self
    {
        $this->nroUnraf = $nroUnraf;

        return $this;
    }

    public function getFechaEgreso(): ?\DateTimeInterface
    {
        return $this->fechaEgreso;
    }

    public function setFechaEgreso(?\DateTimeInterface $fechaEgreso): self
    {
        $this->fechaEgreso = $fechaEgreso;

        return $this;
    }

    public function getImagenTED(): ?string
    {
        return $this->imagenTED;
    }

    public function setImagenTED(?string $imagenTED): self
    {
        $this->imagenTED = $imagenTED;

        return $this;
    }
}
