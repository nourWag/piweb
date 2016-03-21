<?php

namespace Proxies\__CG__\Myapp\ResponsableBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Produit extends \Myapp\ResponsableBundle\Entity\Produit implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'id', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'description', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'reference', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'designation', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'taille', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'etat', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'prixdachat', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'marque', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'prixvente', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'quantite', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'note', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'NbreV', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'disponible', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'couleur', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'size', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'img'];
        }

        return ['__isInitialized__', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'id', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'description', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'reference', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'designation', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'taille', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'etat', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'prixdachat', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'marque', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'prixvente', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'quantite', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'note', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'NbreV', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'disponible', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'couleur', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'size', '' . "\0" . 'Myapp\\ResponsableBundle\\Entity\\Produit' . "\0" . 'img'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Produit $proxy) {
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
    public function getSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSize', []);

        return parent::getSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setSize($size)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSize', [$size]);

        return parent::setSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function getCouleur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouleur', []);

        return parent::getCouleur();
    }

    /**
     * {@inheritDoc}
     */
    public function setCouleur($couleur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCouleur', [$couleur]);

        return parent::setCouleur($couleur);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisponible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisponible', []);

        return parent::getDisponible();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisponible($disponible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisponible', [$disponible]);

        return parent::setDisponible($disponible);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbreV()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbreV', []);

        return parent::getNbreV();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbreV($NbreV)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbreV', [$NbreV]);

        return parent::setNbreV($NbreV);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote($note)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        return parent::setNote($note);
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
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', []);

        return parent::getReference();
    }

    /**
     * {@inheritDoc}
     */
    public function getDesignation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDesignation', []);

        return parent::getDesignation();
    }

    /**
     * {@inheritDoc}
     */
    public function getTaille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaille', []);

        return parent::getTaille();
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixdachat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixdachat', []);

        return parent::getPrixdachat();
    }

    /**
     * {@inheritDoc}
     */
    public function getMarque()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarque', []);

        return parent::getMarque();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixvente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixvente', []);

        return parent::getPrixvente();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantite', []);

        return parent::getQuantite();
    }

    /**
     * {@inheritDoc}
     */
    public function getImg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImg', []);

        return parent::getImg();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function setReference($reference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', [$reference]);

        return parent::setReference($reference);
    }

    /**
     * {@inheritDoc}
     */
    public function setDesignation($designation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDesignation', [$designation]);

        return parent::setDesignation($designation);
    }

    /**
     * {@inheritDoc}
     */
    public function setTaille($taille)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaille', [$taille]);

        return parent::setTaille($taille);
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixdachat($prixdachat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixdachat', [$prixdachat]);

        return parent::setPrixdachat($prixdachat);
    }

    /**
     * {@inheritDoc}
     */
    public function setMarque($marque)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarque', [$marque]);

        return parent::setMarque($marque);
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixvente($prixvente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixvente', [$prixvente]);

        return parent::setPrixvente($prixvente);
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantite($quantite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantite', [$quantite]);

        return parent::setQuantite($quantite);
    }

    /**
     * {@inheritDoc}
     */
    public function setImg($img)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImg', [$img]);

        return parent::setImg($img);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
