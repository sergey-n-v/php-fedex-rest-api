<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicates error alert when suspicious files, potential exploits and viruses found while scanning files , directories and user accounts. This includes code, message and parameter
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $code
 * @property OpenShipParameter[] $parameterList
 * @property  $message

 */
class OpenShipCXSError404 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCXSError404';

    /**
     * Indicates the error code.<br>Example: NOT.FOUND.ERROR
     *
     * 
     * Example: 
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['code'] = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->values['code'];
    }

    /**
     * Specifies list of parameters.
     *
     * 
     * Example: 
     * @param OpenShipParameter[] $parameterList
     * @return $this
     */
    public function setParameterList(array $parameterList)
    {
        $this->values['parameterList'] = $parameterList;
        return $this;
    }

    /**
     * Get parameterList
     *
     * @return OpenShipParameter[]
     */
    public function getParameterList()
    {
        return $this->values['parameterList'];
    }

    /**
     * Indicates the description of API error alert message.<br>Example: The resource you requested is no longer available. Please modify your request and try again.
     *
     * 
     * Example: 
     * @param  $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->values['message'] = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return 
     */
    public function getMessage()
    {
        return $this->values['message'];
    }
}