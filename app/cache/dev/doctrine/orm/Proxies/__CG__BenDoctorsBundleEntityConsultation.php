<?php

namespace Proxies\__CG__\Ben\DoctorsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Consultation extends \Ben\DoctorsBundle\Entity\Consultation implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'id', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'name', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'motiftype', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'type', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'infrastructure', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'created', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'diagnosis', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'treatment', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'decision', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'chronic', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'person', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'user', 'tests', 'consultationmeds'];
        }

        return ['__isInitialized__', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'id', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'name', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'motiftype', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'type', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'infrastructure', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'created', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'diagnosis', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'treatment', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'decision', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'chronic', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'person', '' . "\0" . 'Ben\\DoctorsBundle\\Entity\\Consultation' . "\0" . 'user', 'tests', 'consultationmeds'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Consultation $proxy) {
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setPerson(\Ben\DoctorsBundle\Entity\Person $person)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPerson', [$person]);

        return parent::setPerson($person);
    }

    /**
     * {@inheritDoc}
     */
    public function getPerson()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPerson', []);

        return parent::getPerson();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Ben\UserBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function addTest(\Ben\DoctorsBundle\Entity\Test $tests)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTest', [$tests]);

        return parent::addTest($tests);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTest(\Ben\DoctorsBundle\Entity\Test $tests)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTest', [$tests]);

        return parent::removeTest($tests);
    }

    /**
     * {@inheritDoc}
     */
    public function getTests()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTests', []);

        return parent::getTests();
    }

    /**
     * {@inheritDoc}
     */
    public function addConsultationmed(\Ben\DoctorsBundle\Entity\ConsultationMeds $consultationmeds)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addConsultationmed', [$consultationmeds]);

        return parent::addConsultationmed($consultationmeds);
    }

    /**
     * {@inheritDoc}
     */
    public function removeConsultationmed(\Ben\DoctorsBundle\Entity\ConsultationMeds $consultationmeds)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeConsultationmed', [$consultationmeds]);

        return parent::removeConsultationmed($consultationmeds);
    }

    /**
     * {@inheritDoc}
     */
    public function getConsultationmeds()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConsultationmeds', []);

        return parent::getConsultationmeds();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiagnosis($diagnosis)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiagnosis', [$diagnosis]);

        return parent::setDiagnosis($diagnosis);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiagnosis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiagnosis', []);

        return parent::getDiagnosis();
    }

    /**
     * {@inheritDoc}
     */
    public function setTreatment($treatment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTreatment', [$treatment]);

        return parent::setTreatment($treatment);
    }

    /**
     * {@inheritDoc}
     */
    public function getTreatment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTreatment', []);

        return parent::getTreatment();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setMotiftype($motiftype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMotiftype', [$motiftype]);

        return parent::setMotiftype($motiftype);
    }

    /**
     * {@inheritDoc}
     */
    public function getMotiftype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotiftype', []);

        return parent::getMotiftype();
    }

    /**
     * {@inheritDoc}
     */
    public function setInfrastructure($infrastructure)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInfrastructure', [$infrastructure]);

        return parent::setInfrastructure($infrastructure);
    }

    /**
     * {@inheritDoc}
     */
    public function getInfrastructure()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInfrastructure', []);

        return parent::getInfrastructure();
    }

    /**
     * {@inheritDoc}
     */
    public function isSpecial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSpecial', []);

        return parent::isSpecial();
    }

    /**
     * {@inheritDoc}
     */
    public function setChronic($chronic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChronic', [$chronic]);

        return parent::setChronic($chronic);
    }

    /**
     * {@inheritDoc}
     */
    public function getChronic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChronic', []);

        return parent::getChronic();
    }

    /**
     * {@inheritDoc}
     */
    public function setDecision($decision)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDecision', [$decision]);

        return parent::setDecision($decision);
    }

    /**
     * {@inheritDoc}
     */
    public function getDecision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDecision', []);

        return parent::getDecision();
    }

}
