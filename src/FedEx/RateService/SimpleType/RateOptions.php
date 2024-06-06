<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateOptions
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateOptions extends AbstractSimpleType
{

  const _HAZARDOUS_MATERIALS = 'HAZARDOUS_MATERIALS';
  const _BATTERY = 'BATTERY';
  const _ORM_D = 'ORM_D';
  const _REPORTABLE_QUANTITIES = 'REPORTABLE_QUANTITIES';
  const _SMALL_QUANTITY_EXCEPTION = 'SMALL_QUANTITY_EXCEPTION';
  const _LIMITED_QUANTITIES_COMMODITIES = 'LIMITED_QUANTITIES_COMMODITIES';
}
