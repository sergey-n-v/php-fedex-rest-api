<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to allow the Email Label shipment originator,  specify if the Email label shipment completer can make modifications to editable shipment data.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $options

 */
class OpenShipPendingShipmentProcessingOptionsRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPendingShipmentProcessingOptionsRequested';

    /**
     * These are processing options.
     *
     * simpleClass: OpenShipOptions
     * Example: ["ALLOW_MODIFICATIONS"]
     * @param string $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['options'] = $options;
        return $this;
    }

    /**
     * Get options
     *
     * @return string
     */
    public function getOptions()
    {
        return $this->values['options'];
    }
}
