<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PickupScheduleDay
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class PickupScheduleDay extends AbstractSimpleType
{

  const _SAME_DAY = 'SAME_DAY';
  const _FUTURE_DAY = 'FUTURE_DAY';
}
