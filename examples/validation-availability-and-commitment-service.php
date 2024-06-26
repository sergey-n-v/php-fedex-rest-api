<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedExRestApi\AuthorizationService\ComplexType\AuthResponse;
use FedExRestApi\AuthorizationService\Request as FedexAuthorizationRequest;
use FedExRestApi\AvailabilityService\ComplexType\AvTransitTimeRecipient;
use FedExRestApi\AvailabilityService\ComplexType\AvTransitTimeRecipient_address;
use FedExRestApi\AvailabilityService\ComplexType\AvTransitTimeRequestedPackageLineItem;
use FedExRestApi\AvailabilityService\ComplexType\AvTransitTimeRequestedPackageLineItem_declaredValue;
use FedExRestApi\AvailabilityService\ComplexType\AvTransitTimeRequestedPackageLineItem_weight;
use FedExRestApi\AvailabilityService\ComplexType\AvTransitTimeRequestedShipment;
use FedExRestApi\AvailabilityService\ComplexType\AvTransitTimeRequestedShipment_shipper;
use FedExRestApi\AvailabilityService\ComplexType\AvTransitTimeShipper;
use FedExRestApi\AvailabilityService\ComplexType\TransitTimesRequest;
use FedExRestApi\AvailabilityService\Request as FedexAvailabilityService;
use FedExRestApi\AvailabilityService\SimpleType\AvCarrierCodes;

$authorizationRequest = new FedexAuthorizationRequest();
$ratesReply = $authorizationRequest->authorize();

$accessToken = '';
if ($ratesReply instanceof AuthResponse) {
    $accessToken = $ratesReply->getAccessToken();
} else {
    var_dump("Auth Error", $ratesReply->getErrors());
    die;
}

//authentication & client details
$fedexAvailabilityService = new FedexAvailabilityService();
$fedexAvailabilityService->setAccessToken($accessToken);

$serviceAvailabilityReply = $fedexAvailabilityService->transitTimes(
    (new TransitTimesRequest())
        ->setCarrierCodes([AvCarrierCodes::_FDXE])
        ->setRequestedShipment(
            (new AvTransitTimeRequestedShipment())
                ->setShipper(
                    (new AvTransitTimeRequestedShipment_shipper())
                        ->setAddress(
                            (new AvTransitTimeShipper())
                                ->setCountryCode('38115')
                                ->setCountryCode('US')
//                ->setCity('anyCity')
//                ->setStateOrProvinceCode('TX')
                        )
                )
                ->setRecipients(
                    [
                        (new AvTransitTimeRecipient())
                            ->setAddress(
                                (new AvTransitTimeRecipient_address())
                                    ->setCountryCode('20171')
                                    ->setCountryCode('US')
//                ->setCity('anyCity')
//                ->setStateOrProvinceCode('TX')
                            )
                    ]
                )
//        ->setServiceType('STANDARD_OVERNIGHT')
//        ->setPickupType(\FedExRestApi\AvailabilityService\SimpleType\AvPickupType::_USE_SCHEDULED_PICKUP)
//        ->setShippingChargesPayment(
//            (new AvTransitTimeShippingChargesPayment())
//            ->setPayor(
//                (new AvTransitTimeShippingChargesPayment_payor())
//                ->setResponsibleParty(
//                    (new AvTransitTimeShippingChargesPayment_payor_responsibleParty())
//                    ->setAddress(
//                        (new AvTransitTimeShipper())
//                        ->setCountryCode('US')
//                        ->setStateOrProvinceCode('TX')
//                        ->setCity('city')
//                        ->setPostalCode('34213')
//                        ->setResidential(true)
//                    )
//                    ->setAccountNumber(
//                        (new AvTransitTimeShippingChargesPayment_payor_responsibleParty_accountNumber())
//                        ->setValue(
//                            'account number'
//                        )
//                    )
//                )
//            )
//            ->setPaymentType(\FedExRestApi\AvailabilityService\SimpleType\AvPaymentType::_SENDER)
//        )
                ->setRequestedPackageLineItems(
                    [
                        (new AvTransitTimeRequestedPackageLineItem())
//                ->setDimensions(
//                    (new AvTransitTimeRequestedPackageLineItem_dimensions())
//                    ->setUnits('CM')
//                    ->setLength(2)
//                    ->setHeight(3)
//                    ->setWidth(6)
//                )
                            ->setWeight(
                                (new AvTransitTimeRequestedPackageLineItem_weight())
                                    ->setUnits("KG")
                                    ->setValue(0.654)
                            )
                            ->setDeclaredValue(
                                (new AvTransitTimeRequestedPackageLineItem_declaredValue())
                                    ->setCurrency("USD")
                                    ->setAmount(123.2)
                            )
//                ->setPackageSpecialServices(
//                    (new AvTransitTimeRequestedPackageLineItem_packageSpecialServices())
//                    ->setSpecialServiceTypes(["DANGEROUS_GOODS"])
//                    ->setDangerousGoodsDetail(
//                        (new AvTransitTimeRequestedPackageLineItem_packageSpecialServices_dangerousGoodsDetail())
//                        ->setAccessibility(\FedExRestApi\AvailabilityService\SimpleType\AvAccessibility::_ACCESSIBLE)
//                        ->setOptions(
//                            [\FedExRestApi\AvailabilityService\SimpleType\AvOptions::_ORM_D]
//                        )
//                    )
//                )
                    ]
                )
        )
);

var_dump($serviceAvailabilityReply);

