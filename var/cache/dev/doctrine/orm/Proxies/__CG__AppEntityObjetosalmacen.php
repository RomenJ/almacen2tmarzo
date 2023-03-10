<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Objetosalmacen extends \App\Entity\Objetosalmacen implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'descripcion', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'cantidad', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'ubicacion', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'entradaalmacen', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'salidaalmacen', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'registroentradas', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'registrosalidas'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'descripcion', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'cantidad', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'ubicacion', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'entradaalmacen', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'salidaalmacen', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'registroentradas', '' . "\0" . 'App\\Entity\\Objetosalmacen' . "\0" . 'registrosalidas'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Objetosalmacen $proxy) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
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
    public function getDescripcion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', []);

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion(string $descripcion): \App\Entity\Objetosalmacen
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', [$descripcion]);

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getCantidad(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCantidad', []);

        return parent::getCantidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setCantidad(?int $cantidad): \App\Entity\Objetosalmacen
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCantidad', [$cantidad]);

        return parent::setCantidad($cantidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getUbicacion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUbicacion', []);

        return parent::getUbicacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setUbicacion(?string $ubicacion): \App\Entity\Objetosalmacen
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUbicacion', [$ubicacion]);

        return parent::setUbicacion($ubicacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntradaalmacen(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntradaalmacen', []);

        return parent::getEntradaalmacen();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntradaalmacen(?\DateTimeInterface $entradaalmacen): \App\Entity\Objetosalmacen
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntradaalmacen', [$entradaalmacen]);

        return parent::setEntradaalmacen($entradaalmacen);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalidaalmacen(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalidaalmacen', []);

        return parent::getSalidaalmacen();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalidaalmacen(?\DateTimeInterface $salidaalmacen): \App\Entity\Objetosalmacen
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalidaalmacen', [$salidaalmacen]);

        return parent::setSalidaalmacen($salidaalmacen);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegistroentradas(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegistroentradas', []);

        return parent::getRegistroentradas();
    }

    /**
     * {@inheritDoc}
     */
    public function addRegistroentrada(\App\Entity\Registroentrada $registroentrada): \App\Entity\Objetosalmacen
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRegistroentrada', [$registroentrada]);

        return parent::addRegistroentrada($registroentrada);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRegistroentrada(\App\Entity\Registroentrada $registroentrada): \App\Entity\Objetosalmacen
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRegistroentrada', [$registroentrada]);

        return parent::removeRegistroentrada($registroentrada);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getRegistrosalidas(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegistrosalidas', []);

        return parent::getRegistrosalidas();
    }

    /**
     * {@inheritDoc}
     */
    public function addRegistrosalida(\App\Entity\Registrosalida $registrosalida): \App\Entity\Objetosalmacen
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRegistrosalida', [$registrosalida]);

        return parent::addRegistrosalida($registrosalida);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRegistrosalida(\App\Entity\Registrosalida $registrosalida): \App\Entity\Objetosalmacen
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRegistrosalida', [$registrosalida]);

        return parent::removeRegistrosalida($registrosalida);
    }

}