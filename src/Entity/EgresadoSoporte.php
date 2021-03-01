<?php

namespace App\Entity;

use App\Repository\EgresadoSoporteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EgresadoSoporteRepository::class)
 */
class EgresadoSoporte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    
    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private $apellido;

    /**
     * @ORM\Column(type="date", nullable = true)
     */
    private $fechaNacimiento;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private $ciudad;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private $provincia;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private $nacionalidad;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private $dni;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private $calle;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private $nroDomicilio;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private $piso;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private $depto;

   


    /**
     * @ORM\Column(type="date", nullable = true)
     */
    private $fechaEgreso;

    /**
     * @ORM\ManyToOne(targetEntity=Carreras::class, inversedBy="egresados")
     */
    private $denominacionCarrera;

    /**
     * @ORM\ManyToOne(targetEntity=Titulos::class, inversedBy="egresados")
     */
    private $tituloOtorgado;

    /**
     * @ORM\ManyToOne(targetEntity=Documentos::class, inversedBy="egresados")
     */
    private $documentoEmitido;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nroResolucionME;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nroExpediente;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nroResolucionRectoral;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nroDiploma;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nroAnalitico;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nroRevalida;

    /**
     * @ORM\Column(type="date", nullable = true)
     */
    private $fechaEntrega;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255,nullable = true)
     */
    private $telefono;

    

    /**
     * @ORM\Column(type="simple_array", nullable=true,)
     */
    private $archivosArray = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pdfAnalitico;

    /**
     * @ORM\OneToMany(targetEntity=Archivo::class, mappedBy="egresadoSoporte", cascade={"remove"})
     */
    private $archivos;

    public function __construct()
    {
        $this->archivos = new ArrayCollection();
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getFechaNacimiento(): ?\DateTimeInterface
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(\DateTimeInterface $fechaNacimiento): self
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getNacionalidad(): ?string
    {
        return $this->nacionalidad;
    }

    public function setNacionalidad(string $nacionalidad): self
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(string $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    public function getCalle(): ?string
    {
        return $this->calle;
    }

    public function setCalle(string $calle): self
    {
        $this->calle = $calle;

        return $this;
    }

    public function getNroDomicilio(): ?string
    {
        return $this->nroDomicilio;
    }

    public function setNroDomicilio(string $nroDomicilio): self
    {
        $this->nroDomicilio = $nroDomicilio;

        return $this;
    }

    public function getPiso(): ?string
    {
        return $this->piso;
    }

    public function setPiso(string $piso): self
    {
        $this->piso = $piso;

        return $this;
    }

    public function getDepto(): ?string
    {
        return $this->depto;
    }

    public function setDepto(string $depto): self
    {
        $this->depto = $depto;

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

    public function getDenominacionCarrera(): ?Carreras
    {
        return $this->denominacionCarrera;
    }

    public function setDenominacionCarrera(?Carreras $denominacionCarrera): self
    {
        $this->denominacionCarrera = $denominacionCarrera;

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

    public function getDocumentoEmitido(): ?Documentos
    {
        return $this->documentoEmitido;
    }

    public function setDocumentoEmitido(?Documentos $documentoEmitido): self
    {
        $this->documentoEmitido = $documentoEmitido;

        return $this;
    }

    public function getNroResolucionME(): ?int
    {
        return $this->nroResolucionME;
    }

    public function setNroResolucionME(?int $nroResolucionME): self
    {
        $this->nroResolucionME = $nroResolucionME;

        return $this;
    }

    public function getNroExpediente(): ?int
    {
        return $this->nroExpediente;
    }

    public function setNroExpediente(?int $nroExpediente): self
    {
        $this->nroExpediente = $nroExpediente;

        return $this;
    }

    public function getNroResolucionRectoral(): ?int
    {
        return $this->nroResolucionRectoral;
    }

    public function setNroResolucionRectoral(?int $nroResolucionRectoral): self
    {
        $this->nroResolucionRectoral = $nroResolucionRectoral;

        return $this;
    }

    public function getNroDiploma(): ?int
    {
        return $this->nroDiploma;
    }

    public function setNroDiploma(?int $nroDiploma): self
    {
        $this->nroDiploma = $nroDiploma;

        return $this;
    }

    public function getNroAnalitico(): ?int
    {
        return $this->nroAnalitico;
    }

    public function setNroAnalitico(?int $nroAnalitico): self
    {
        $this->nroAnalitico = $nroAnalitico;

        return $this;
    }

    public function getNroRevalida(): ?int
    {
        return $this->nroRevalida;
    }

    public function setNroRevalida(?int $nroRevalida): self
    {
        $this->nroRevalida = $nroRevalida;

        return $this;
    }

    public function getFechaEntrega(): ?\DateTimeInterface
    {
        return $this->fechaEntrega;
    }

    public function setFechaEntrega(\DateTimeInterface $fechaEntrega): self
    {
        $this->fechaEntrega = $fechaEntrega;

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

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }


    public function getArchivosArray(): ?array
    {
        return $this->archivosArray;
    }

    public function setArchivosArray(?array $archivosArray): self
    {
        $this->archivosArray = $archivosArray;

        return $this;
    }

    public function getPdfAnalitico(): ?string
    {
        return $this->pdfAnalitico;
    }

    public function setPdfAnalitico(?string $pdfAnalitico): self
    {
        $this->pdfAnalitico = $pdfAnalitico;

        return $this;
    }

    /**
     * @return Collection|Archivo[]
     */
    public function getArchivos(): Collection
    {
        return $this->archivos;
    }

    public function addArchivo(Archivo $archivo): self
    {
        if (!$this->archivos->contains($archivo)) {
            $this->archivos[] = $archivo;
            $archivo->setEgresadoSoporte($this);
        }

        return $this;
    }

    public function removeArchivo(Archivo $archivo): self
    {
        if ($this->archivos->removeElement($archivo)) {
            // set the owning side to null (unless already changed)
            if ($archivo->getEgresadoSoporte() === $this) {
                $archivo->setEgresadoSoporte(null);
            }
        }

        return $this;
    }


}

    
