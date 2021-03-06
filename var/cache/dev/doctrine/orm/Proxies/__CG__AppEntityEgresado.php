<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Egresado extends \App\Entity\Egresado implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'apellido', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'fechaNacimiento', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'ciudad', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'provincia', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nacionalidad', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'dni', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'calle', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nroDomicilio', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'piso', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'depto', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'fechaEgreso', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'denominacionCarrera', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'documentoEmitido', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nroResolucionME', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nroExpediente', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nroResolucionRectoral', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nroDiploma', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nroAnalitico', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nroRevalida', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'telefono', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'archivos', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'archivosArray', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'pdfAnalitico', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nombreRector', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'apellidoRector', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nombreSecretario', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'apellidoSecretario', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'tituloOtorgado', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'NroResolucionAprob', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'libro', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'folio', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'tipoDocumentoIdentidad', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'fechaEntrega', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'originalDuplicado', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'fechaCreacion'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'apellido', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'fechaNacimiento', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'ciudad', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'provincia', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nacionalidad', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'dni', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'calle', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nroDomicilio', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'piso', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'depto', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'fechaEgreso', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'denominacionCarrera', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'documentoEmitido', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nroResolucionME', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nroExpediente', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nroResolucionRectoral', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nroDiploma', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nroAnalitico', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nroRevalida', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'telefono', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'archivos', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'archivosArray', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'pdfAnalitico', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nombreRector', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'apellidoRector', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'nombreSecretario', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'apellidoSecretario', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'tituloOtorgado', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'NroResolucionAprob', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'libro', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'folio', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'tipoDocumentoIdentidad', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'fechaEntrega', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'originalDuplicado', '' . "\0" . 'App\\Entity\\Egresado' . "\0" . 'fechaCreacion'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Egresado $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre(string $nombre): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellido(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellido', []);

        return parent::getApellido();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellido(string $apellido): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellido', [$apellido]);

        return parent::setApellido($apellido);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaNacimiento(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaNacimiento', []);

        return parent::getFechaNacimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaNacimiento(\DateTimeInterface $fechaNacimiento): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaNacimiento', [$fechaNacimiento]);

        return parent::setFechaNacimiento($fechaNacimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getCiudad(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCiudad', []);

        return parent::getCiudad();
    }

    /**
     * {@inheritDoc}
     */
    public function setCiudad(string $ciudad): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCiudad', [$ciudad]);

        return parent::setCiudad($ciudad);
    }

    /**
     * {@inheritDoc}
     */
    public function getProvincia(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProvincia', []);

        return parent::getProvincia();
    }

    /**
     * {@inheritDoc}
     */
    public function setProvincia(string $provincia): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProvincia', [$provincia]);

        return parent::setProvincia($provincia);
    }

    /**
     * {@inheritDoc}
     */
    public function getNacionalidad(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNacionalidad', []);

        return parent::getNacionalidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setNacionalidad(string $nacionalidad): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNacionalidad', [$nacionalidad]);

        return parent::setNacionalidad($nacionalidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getDni(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDni', []);

        return parent::getDni();
    }

    /**
     * {@inheritDoc}
     */
    public function setDni(string $dni): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDni', [$dni]);

        return parent::setDni($dni);
    }

    /**
     * {@inheritDoc}
     */
    public function getCalle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalle', []);

        return parent::getCalle();
    }

    /**
     * {@inheritDoc}
     */
    public function setCalle(string $calle): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCalle', [$calle]);

        return parent::setCalle($calle);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroDomicilio(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroDomicilio', []);

        return parent::getNroDomicilio();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroDomicilio(string $nroDomicilio): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroDomicilio', [$nroDomicilio]);

        return parent::setNroDomicilio($nroDomicilio);
    }

    /**
     * {@inheritDoc}
     */
    public function getPiso(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPiso', []);

        return parent::getPiso();
    }

    /**
     * {@inheritDoc}
     */
    public function setPiso(string $piso): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPiso', [$piso]);

        return parent::setPiso($piso);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepto(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepto', []);

        return parent::getDepto();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepto(string $depto): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepto', [$depto]);

        return parent::setDepto($depto);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaEgreso(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaEgreso', []);

        return parent::getFechaEgreso();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaEgreso(\DateTimeInterface $fechaEgreso): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaEgreso', [$fechaEgreso]);

        return parent::setFechaEgreso($fechaEgreso);
    }

    /**
     * {@inheritDoc}
     */
    public function getDenominacionCarrera(): ?\App\Entity\Carreras
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDenominacionCarrera', []);

        return parent::getDenominacionCarrera();
    }

    /**
     * {@inheritDoc}
     */
    public function setDenominacionCarrera(?\App\Entity\Carreras $denominacionCarrera): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDenominacionCarrera', [$denominacionCarrera]);

        return parent::setDenominacionCarrera($denominacionCarrera);
    }

    /**
     * {@inheritDoc}
     */
    public function getDocumentoEmitido(): ?\App\Entity\Documentos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocumentoEmitido', []);

        return parent::getDocumentoEmitido();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocumentoEmitido(?\App\Entity\Documentos $documentoEmitido): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocumentoEmitido', [$documentoEmitido]);

        return parent::setDocumentoEmitido($documentoEmitido);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroResolucionME(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroResolucionME', []);

        return parent::getNroResolucionME();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroResolucionME(?string $nroResolucionME): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroResolucionME', [$nroResolucionME]);

        return parent::setNroResolucionME($nroResolucionME);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroExpediente(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroExpediente', []);

        return parent::getNroExpediente();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroExpediente(?string $nroExpediente): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroExpediente', [$nroExpediente]);

        return parent::setNroExpediente($nroExpediente);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroResolucionRectoral(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroResolucionRectoral', []);

        return parent::getNroResolucionRectoral();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroResolucionRectoral(?string $nroResolucionRectoral): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroResolucionRectoral', [$nroResolucionRectoral]);

        return parent::setNroResolucionRectoral($nroResolucionRectoral);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroDiploma(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroDiploma', []);

        return parent::getNroDiploma();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroDiploma(?string $nroDiploma): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroDiploma', [$nroDiploma]);

        return parent::setNroDiploma($nroDiploma);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroAnalitico(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroAnalitico', []);

        return parent::getNroAnalitico();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroAnalitico(?string $nroAnalitico): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroAnalitico', [$nroAnalitico]);

        return parent::setNroAnalitico($nroAnalitico);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroRevalida(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroRevalida', []);

        return parent::getNroRevalida();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroRevalida(?string $nroRevalida): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroRevalida', [$nroRevalida]);

        return parent::setNroRevalida($nroRevalida);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', []);

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono(string $telefono): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', [$telefono]);

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getArchivos(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchivos', []);

        return parent::getArchivos();
    }

    /**
     * {@inheritDoc}
     */
    public function addArchivo(\App\Entity\Archivo $archivo): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addArchivo', [$archivo]);

        return parent::addArchivo($archivo);
    }

    /**
     * {@inheritDoc}
     */
    public function removeArchivo(\App\Entity\Archivo $archivo): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeArchivo', [$archivo]);

        return parent::removeArchivo($archivo);
    }

    /**
     * {@inheritDoc}
     */
    public function getArchivosArray(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchivosArray', []);

        return parent::getArchivosArray();
    }

    /**
     * {@inheritDoc}
     */
    public function setArchivosArray(?array $archivosArray): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchivosArray', [$archivosArray]);

        return parent::setArchivosArray($archivosArray);
    }

    /**
     * {@inheritDoc}
     */
    public function getPdfAnalitico(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPdfAnalitico', []);

        return parent::getPdfAnalitico();
    }

    /**
     * {@inheritDoc}
     */
    public function setPdfAnalitico(?string $pdfAnalitico): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPdfAnalitico', [$pdfAnalitico]);

        return parent::setPdfAnalitico($pdfAnalitico);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreRector(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreRector', []);

        return parent::getNombreRector();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreRector(?string $nombreRector): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreRector', [$nombreRector]);

        return parent::setNombreRector($nombreRector);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidoRector(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidoRector', []);

        return parent::getApellidoRector();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellidoRector(?string $apellidoRector): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidoRector', [$apellidoRector]);

        return parent::setApellidoRector($apellidoRector);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreSecretario(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreSecretario', []);

        return parent::getNombreSecretario();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreSecretario(?string $nombreSecretario): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreSecretario', [$nombreSecretario]);

        return parent::setNombreSecretario($nombreSecretario);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidoSecretario(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidoSecretario', []);

        return parent::getApellidoSecretario();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellidoSecretario(?string $apellidoSecretario): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidoSecretario', [$apellidoSecretario]);

        return parent::setApellidoSecretario($apellidoSecretario);
    }

    /**
     * {@inheritDoc}
     */
    public function getTituloOtorgado(): ?\App\Entity\Titulos
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTituloOtorgado', []);

        return parent::getTituloOtorgado();
    }

    /**
     * {@inheritDoc}
     */
    public function setTituloOtorgado(?\App\Entity\Titulos $tituloOtorgado): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTituloOtorgado', [$tituloOtorgado]);

        return parent::setTituloOtorgado($tituloOtorgado);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroResolucionAprob(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroResolucionAprob', []);

        return parent::getNroResolucionAprob();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroResolucionAprob(?string $NroResolucionAprob): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroResolucionAprob', [$NroResolucionAprob]);

        return parent::setNroResolucionAprob($NroResolucionAprob);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibro(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibro', []);

        return parent::getLibro();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibro(?int $libro): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibro', [$libro]);

        return parent::setLibro($libro);
    }

    /**
     * {@inheritDoc}
     */
    public function getFolio(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFolio', []);

        return parent::getFolio();
    }

    /**
     * {@inheritDoc}
     */
    public function setFolio(?int $folio): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFolio', [$folio]);

        return parent::setFolio($folio);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoDocumentoIdentidad(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoDocumentoIdentidad', []);

        return parent::getTipoDocumentoIdentidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoDocumentoIdentidad(?string $tipoDocumentoIdentidad): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoDocumentoIdentidad', [$tipoDocumentoIdentidad]);

        return parent::setTipoDocumentoIdentidad($tipoDocumentoIdentidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaEntrega(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaEntrega', []);

        return parent::getFechaEntrega();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaEntrega(?\DateTimeInterface $fechaEntrega): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaEntrega', [$fechaEntrega]);

        return parent::setFechaEntrega($fechaEntrega);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginalDuplicado(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginalDuplicado', []);

        return parent::getOriginalDuplicado();
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginalDuplicado(string $originalDuplicado): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginalDuplicado', [$originalDuplicado]);

        return parent::setOriginalDuplicado($originalDuplicado);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaCreacion(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaCreacion', []);

        return parent::getFechaCreacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaCreacion(?\DateTimeInterface $fechaCreacion): \App\Entity\Egresado
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaCreacion', [$fechaCreacion]);

        return parent::setFechaCreacion($fechaCreacion);
    }

}
