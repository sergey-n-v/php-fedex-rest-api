<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies details for how to access the pending email return label.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $password
 * @property string $role
 * @property string $emailLabelUrl
 * @property string $userId

 */
class OpenShipPendingShipmentAccessorDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPendingShipmentAccessorDetail';

    /**
     * Specifies the accessor password.<br>Example: password
     *
     *
     * Example: password
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->values['password'] = $password;
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->values['password'];
    }

    /**
     * Specifies the accessor role.<br>Example: role
     *
     *
     * Example: role
     * @param string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->values['role'] = $role;
        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->values['role'];
    }

    /**
     * Specifies the URL for the email label.<br>Example: emailLabelUrl
     *
     *
     * Example: emailLabelUrl
     * @param string $emailLabelUrl
     * @return $this
     */
    public function setEmailLabelUrl($emailLabelUrl)
    {
        $this->values['emailLabelUrl'] = $emailLabelUrl;
        return $this;
    }

    /**
     * Get emailLabelUrl
     *
     * @return string
     */
    public function getEmailLabelUrl()
    {
        return $this->values['emailLabelUrl'];
    }

    /**
     * Specifies the accessor User ID.<br>Example: userId
     *
     *
     * Example: userId
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->values['userId'] = $userId;
        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->values['userId'];
    }
}