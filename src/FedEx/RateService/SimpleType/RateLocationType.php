<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateLocationType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateLocationType extends AbstractSimpleType
{

  const _FEDEX_AUTHORIZED_SHIP_CENTER = 'FEDEX_AUTHORIZED_SHIP_CENTER';
  const _FEDEX_OFFICE = 'FEDEX_OFFICE';
  const _FEDEX_SELF_SERVICE_LOCATION = 'FEDEX_SELF_SERVICE_LOCATION';
  const _FEDEX_STAFFED = 'FEDEX_STAFFED';
  const _RETAIL_ALLICANCE_LOCATION = 'RETAIL_ALLICANCE_LOCATION';
  const _FEDEX_GROUND_TERMINAL = 'FEDEX_GROUND_TERMINAL';
  const _FEDEX_ONSITE = 'FEDEX_ONSITE';
}