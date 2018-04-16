<?php
// src/UN/TestBundle/Entity/Product.php

namespace UN\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="un_product")
 * @ORM\Entity(repositoryClass="UN\TestBundle\Repository\ProductRepository")
 */
class Product
{
    const FOOD_PRODUCT = 'food';
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="decimal", precision=10, scale=2)
     */
    private $price;

    
    public function __construct($name, $type, $price)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
    }
    
    /**
     * Calcul TVA
     */
    public function computeTVA()
    {
        if ($this->price < 0)
        {
            throw new \LogicException('Le prix ne peut-être négatif');
        }
        
        if ($this->type == self::FOOD_PRODUCT)
        {
            return $this->price * .055;
        }
        
        return $this->price * .196;
    }
    
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price.
     *
     * @param string $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set type.
     *
     * @param string $type
     *
     * @return Product
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
