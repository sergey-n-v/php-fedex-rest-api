<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates the tracking details of the package.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $formId
 * @property string $trackingIdType
 * @property int $uspsApplicationId
 * @property string $trackingNumber

 */
class ShipTrackingId extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipTrackingId';

    /**
     * Set formId
     *
     *
     * Example: 0201
     * @param string $formId
     * @return $this
     */
    public function setFormId($formId)
    {
        $this->values['formId'] = $formId;
        return $this;
    }

    /**
     * Get formId
     *
     * @return string
     */
    public function getFormId()
    {
        return $this->values['formId'];
    }

    /**
     * Set trackingIdType
     *
     *
     * Example: EXPRESS
     * @param string $trackingIdType
     * @return $this
     */
    public function setTrackingIdType($trackingIdType)
    {
        $this->values['trackingIdType'] = $trackingIdType;
        return $this;
    }

    /**
     * Get trackingIdType
     *
     * @return string
     */
    public function getTrackingIdType()
    {
        return $this->values['trackingIdType'];
    }

    /**
     * Set uspsApplicationId
     *
     *
     * Example: 92
     * @param int $uspsApplicationId
     * @return $this
     */
    public function setUspsApplicationId($uspsApplicationId)
    {
        $this->values['uspsApplicationId'] = $uspsApplicationId;
        return $this;
    }

    /**
     * Get uspsApplicationId
     *
     * @return int
     */
    public function getUspsApplicationId()
    {
        return $this->values['uspsApplicationId'];
    }

    /**
     * Set trackingNumber
     *
     *
     * Example: 49092000070120032835
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['trackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * Get trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->values['trackingNumber'];
    }
}