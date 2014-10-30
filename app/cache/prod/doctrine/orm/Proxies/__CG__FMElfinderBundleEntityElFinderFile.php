<?php

namespace Proxies\__CG__\FM\ElfinderBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ElFinderFile extends \FM\ElfinderBundle\Entity\ElFinderFile implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return array('__isInitialized__', 'parentId', 'name', 'content', 'size', 'mtime', 'mime', 'read', 'write', 'locked', 'hidden', 'width', 'height', 'id');
        }

        return array('__isInitialized__', 'parentId', 'name', 'content', 'size', 'mtime', 'mime', 'read', 'write', 'locked', 'hidden', 'width', 'height', 'id');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ElFinderFile $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setContent($content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', array($content));

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', array());

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeight($height)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeight', array($height));

        return parent::setHeight($height);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeight', array());

        return parent::getHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setHidden($hidden)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHidden', array($hidden));

        return parent::setHidden($hidden);
    }

    /**
     * {@inheritDoc}
     */
    public function getHidden()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHidden', array());

        return parent::getHidden();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocked($locked)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocked', array($locked));

        return parent::setLocked($locked);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocked', array());

        return parent::getLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function setMime($mime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMime', array($mime));

        return parent::setMime($mime);
    }

    /**
     * {@inheritDoc}
     */
    public function getMime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMime', array());

        return parent::getMime();
    }

    /**
     * {@inheritDoc}
     */
    public function setMtime($mtime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMtime', array($mtime));

        return parent::setMtime($mtime);
    }

    /**
     * {@inheritDoc}
     */
    public function getMtime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMtime', array());

        return parent::getMtime();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setParentId($parentId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParentId', array($parentId));

        return parent::setParentId($parentId);
    }

    /**
     * {@inheritDoc}
     */
    public function getParentId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParentId', array());

        return parent::getParentId();
    }

    /**
     * {@inheritDoc}
     */
    public function setRead($read)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRead', array($read));

        return parent::setRead($read);
    }

    /**
     * {@inheritDoc}
     */
    public function getRead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRead', array());

        return parent::getRead();
    }

    /**
     * {@inheritDoc}
     */
    public function setSize($size)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSize', array($size));

        return parent::setSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function getSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSize', array());

        return parent::getSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setWidth($width)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWidth', array($width));

        return parent::setWidth($width);
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWidth', array());

        return parent::getWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setWrite($write)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWrite', array($write));

        return parent::setWrite($write);
    }

    /**
     * {@inheritDoc}
     */
    public function getWrite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWrite', array());

        return parent::getWrite();
    }

}