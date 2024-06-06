<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipProcessingOptionType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipProcessingOptionType extends AbstractSimpleType
{

  const _SYNCHRONOUS_ONLY = 'SYNCHRONOUS_ONLY';
  const _ALLOW_ASYNCHRONOUS = 'ALLOW_ASYNCHRONOUS';
}
