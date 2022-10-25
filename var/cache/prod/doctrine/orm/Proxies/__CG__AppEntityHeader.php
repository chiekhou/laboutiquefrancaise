<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Header extends \App\Entity\Header implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Header' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Header' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Header' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Header' . "\0" . 'btnTitle', '' . "\0" . 'App\\Entity\\Header' . "\0" . 'btnUrl', '' . "\0" . 'App\\Entity\\Header' . "\0" . 'illustration'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Header' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Header' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Header' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Header' . "\0" . 'btnTitle', '' . "\0" . 'App\\Entity\\Header' . "\0" . 'btnUrl', '' . "\0" . 'App\\Entity\\Header' . "\0" . 'illustration'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Header $proxy) {
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
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): \App\Entity\Header
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent(string $content): \App\Entity\Header
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getBtnTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBtnTitle', []);

        return parent::getBtnTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setBtnTitle(string $btnTitle): \App\Entity\Header
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBtnTitle', [$btnTitle]);

        return parent::setBtnTitle($btnTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getBtnUrl(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBtnUrl', []);

        return parent::getBtnUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setBtnUrl(string $btnUrl): \App\Entity\Header
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBtnUrl', [$btnUrl]);

        return parent::setBtnUrl($btnUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getIllustration(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIllustration', []);

        return parent::getIllustration();
    }

    /**
     * {@inheritDoc}
     */
    public function setIllustration(string $illustration): \App\Entity\Header
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIllustration', [$illustration]);

        return parent::setIllustration($illustration);
    }

}
