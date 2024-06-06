<?php
namespace FedExRestApi\AddressValidationService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * AddressValidationErrorResponseVO401
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionId
 * @property AddressValidationCXSError401[] $errors

 */
class AddressValidationErrorResponseVO401 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationErrorResponseVO401';

    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     *
     *
     * Example: 624deea6-b709-470c-8c39-4b5511281492
     * @param string $transactionId
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->values['transactionId'] = $transactionId;
        return $this;
    }

    /**
     * Get transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->values['transactionId'];
    }

    /**
     * Indicates error alert when suspicious files, potential exploits and viruses found while scanning files, directories and user accounts. This includes code, message and parameters.
     *
     *
     * Example:
     * @param AddressValidationCXSError401[] $errors
     * @return $this
     */
    public function setErrors(array $errors)
    {
        $this->values['errors'] = $errors;
        return $this;
    }

    /**
     * Get errors
     *
     * @return AddressValidationCXSError401[]
     */
    public function getErrors()
    {
        return $this->values['errors'];
    }
}