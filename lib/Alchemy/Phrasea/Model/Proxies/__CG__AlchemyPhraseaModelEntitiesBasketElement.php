<?php

namespace Alchemy\Phrasea\Model\Proxies\__CG__\Alchemy\Phrasea\Model\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class BasketElement extends \Alchemy\Phrasea\Model\Entities\BasketElement implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'record_id', 'sbas_id', 'ord', 'created', 'updated', 'validation_datas', 'basket');
        }

        return array('__isInitialized__', 'id', 'record_id', 'sbas_id', 'ord', 'created', 'updated', 'validation_datas', 'basket');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (BasketElement $proxy) {
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
    public function setRecordId($recordId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecordId', array($recordId));

        return parent::setRecordId($recordId);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecordId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecordId', array());

        return parent::getRecordId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSbasId($sbasId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSbasId', array($sbasId));

        return parent::setSbasId($sbasId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSbasId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSbasId', array());

        return parent::getSbasId();
    }

    /**
     * {@inheritDoc}
     */
    public function getRecord(\Alchemy\Phrasea\Application $app)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecord', array($app));

        return parent::getRecord($app);
    }

    /**
     * {@inheritDoc}
     */
    public function setRecord(\record_adapter $record)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecord', array($record));

        return parent::setRecord($record);
    }

    /**
     * {@inheritDoc}
     */
    public function setOrd($ord)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrd', array($ord));

        return parent::setOrd($ord);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrd', array());

        return parent::getOrd();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated(\DateTime $created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', array($created));

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', array());

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated(\DateTime $updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', array($updated));

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', array());

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function addValidationData(\Alchemy\Phrasea\Model\Entities\ValidationData $validationDatas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addValidationData', array($validationDatas));

        return parent::addValidationData($validationDatas);
    }

    /**
     * {@inheritDoc}
     */
    public function removeValidationData(\Alchemy\Phrasea\Model\Entities\ValidationData $validationDatas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeValidationData', array($validationDatas));

        return parent::removeValidationData($validationDatas);
    }

    /**
     * {@inheritDoc}
     */
    public function getValidationDatas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValidationDatas', array());

        return parent::getValidationDatas();
    }

    /**
     * {@inheritDoc}
     */
    public function setBasket(\Alchemy\Phrasea\Model\Entities\Basket $basket = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBasket', array($basket));

        return parent::setBasket($basket);
    }

    /**
     * {@inheritDoc}
     */
    public function getBasket()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBasket', array());

        return parent::getBasket();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastInBasket()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastInBasket', array());

        return parent::setLastInBasket();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserValidationDatas(\User_Adapter $user, \Alchemy\Phrasea\Application $app)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserValidationDatas', array($user, $app));

        return parent::getUserValidationDatas($user, $app);
    }

}
