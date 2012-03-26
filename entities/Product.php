<?php
/**
 * Original Author: sam
 * Date: 3/24/12
 * Time: 9:54 AM
 */
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="products")
 */
class Product
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;
    /**
     * @Column(type="string")
     */
    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
