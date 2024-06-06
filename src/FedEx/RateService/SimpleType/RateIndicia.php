<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateIndicia
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateIndicia extends AbstractSimpleType
{

  const _MEDIA_MAIL = 'MEDIA_MAIL';
  const _PARCEL_RETURN = 'PARCEL_RETURN';
  const _PARCEL_SELECT = 'PARCEL_SELECT';
  const _PRESORTED_BOUND_PRINTED_MATTER = 'PRESORTED_BOUND_PRINTED_MATTER';
  const _PRESORTED_STANDARD = 'PRESORTED_STANDARD';
}
