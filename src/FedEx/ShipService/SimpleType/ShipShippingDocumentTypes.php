<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipShippingDocumentTypes
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipShippingDocumentTypes extends AbstractSimpleType
{

  const _CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
  const _COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
  const _CUSTOM_PACKAGE_DOCUMENT = 'CUSTOM_PACKAGE_DOCUMENT';
  const _CUSTOM_SHIPMENT_DOCUMENT = 'CUSTOM_SHIPMENT_DOCUMENT';
  const _CUSTOMER_SPECIFIED_LABELS = 'CUSTOMER_SPECIFIED_LABELS';
  const _EXPORT_DECLARATION = 'EXPORT_DECLARATION';
  const _GENERAL_AGENCY_AGREEMENT = 'GENERAL_AGENCY_AGREEMENT';
  const _LABEL = 'LABEL';
  const _USMCA_CERTIFICATION_OF_ORIGIN = 'USMCA_CERTIFICATION_OF_ORIGIN';
  const _OP_900 = 'OP_900';
  const _PENDING_SHIPMENT_EMAIL_NOTIFICATION = 'PENDING_SHIPMENT_EMAIL_NOTIFICATION';
  const _PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
  const _RETURN_INSTRUCTIONS = 'RETURN_INSTRUCTIONS';
  const _USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN = 'USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN';
}
