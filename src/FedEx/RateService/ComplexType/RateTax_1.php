<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the Tax surcharge details
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $amount
 * @property string $name
 * @property string $description
 * @property string $type

 */
class RateTax_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateTax_1';

    /**
     * Set amount
     *
     * 
     * Example: 87.5
     * @param float $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->values['amount'] = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->values['amount'];
    }

    /**
     * Set name
     *
     * 
     * Example: 
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->values['name'] = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->values['name'];
    }

    /**
     * Set description
     *
     * 
     * Example: 
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->values['description'];
    }

    /**
     * Set type
     *
     * 
     * Example: 
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['type'] = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->values['type'];
    }
}
