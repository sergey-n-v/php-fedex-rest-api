<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * OpenShipTaxesOrMiscellaneousChargeType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipTaxesOrMiscellaneousChargeType extends AbstractSimpleType
{

  const _COMMISSIONS = 'COMMISSIONS';
  const _DISCOUNTS = 'DISCOUNTS';
  const _HANDLING_FEES = 'HANDLING_FEES';
  const _OTHER = 'OTHER';
  const _ROYALTIES_AND_LICENSE_FEES = 'ROYALTIES_AND_LICENSE_FEES';
  const _TAXES = 'TAXES';
}
