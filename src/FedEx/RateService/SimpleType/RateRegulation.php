<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateRegulation
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateRegulation extends AbstractSimpleType
{

  const _ADR = 'ADR';
  const _DOT = 'DOT';
  const _IATA = 'IATA';
  const _ORMD = 'ORMD';
}
