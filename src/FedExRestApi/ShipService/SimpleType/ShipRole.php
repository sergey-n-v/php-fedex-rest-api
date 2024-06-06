<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * ShipRole
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipRole extends AbstractSimpleType
{

  const _SHIPMENT_COMPLETOR = 'SHIPMENT_COMPLETOR';
  const _SHIPMENT_INITIATOR = 'SHIPMENT_INITIATOR';
}