<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are completed ETD details when ELECTRONIC_TRADE_DOCUMENTS Special service type is requested
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $folderId
 * @property string $type
 * @property OpenShipUploadDocumentReferenceDetail[] $uploadDocumentReferenceDetails

 */
class OpenShipCompletedEtdDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCompletedEtdDetail';

    /**
     * Returns the folder id where the documents is uploaded <br> Example: "0b0493e580dc1a1b"
     *
     * 
     * Example: 0b0493e580dc1a1b
     * @param string $folderId
     * @return $this
     */
    public function setFolderId($folderId)
    {
        $this->values['folderId'] = $folderId;
        return $this;
    }

    /**
     * Get folderId
     *
     * @return string
     */
    public function getFolderId()
    {
        return $this->values['folderId'];
    }

    /**
     * Returns the type of the document that is being uploaded <br> Example: "COMMERCIAL_INVOICE"
     *
     * 
     * Example: COMMERCIAL_INVOICE
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

    /**
     * Specify the document upload reference details.
     *
     * 
     * Example: 
     * @param OpenShipUploadDocumentReferenceDetail[] $uploadDocumentReferenceDetails
     * @return $this
     */
    public function setUploadDocumentReferenceDetails(array $uploadDocumentReferenceDetails)
    {
        $this->values['uploadDocumentReferenceDetails'] = $uploadDocumentReferenceDetails;
        return $this;
    }

    /**
     * Get uploadDocumentReferenceDetails
     *
     * @return OpenShipUploadDocumentReferenceDetail[]
     */
    public function getUploadDocumentReferenceDetails()
    {
        return $this->values['uploadDocumentReferenceDetails'];
    }
}
