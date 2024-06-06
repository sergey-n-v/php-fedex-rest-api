<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are International Traffic In Arms Regulations shipment service details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $licenseOrExemptionNumber

 */
class OpenShipInternationalTrafficInArmsRegulationsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipInternationalTrafficInArmsRegulationsDetail';

    /**
     * The export or license number for the ITAR shipment.<br>Minimum length is 5 characters.<br>Maximum length is 21 characters.<br>Example: 9871234
     *
     *
     * Example: 9871234
     * @param string $licenseOrExemptionNumber
     * @return $this
     */
    public function setLicenseOrExemptionNumber($licenseOrExemptionNumber)
    {
        $this->values['licenseOrExemptionNumber'] = $licenseOrExemptionNumber;
        return $this;
    }

    /**
     * Get licenseOrExemptionNumber
     *
     * @return string
     */
    public function getLicenseOrExemptionNumber()
    {
        return $this->values['licenseOrExemptionNumber'];
    }
}