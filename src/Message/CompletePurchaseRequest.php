<?php

namespace Paytic\Payments\PlatiOnline\Message;

use ByTIC\Omnipay\PlatiOnline\Message\CompletePurchaseRequest as AbstractCompletePurchaseRequest;
use ByTIC\Payments\Gateways\Providers\AbstractGateway\Message\Traits\HasModelRequest;
use Paytic\Payments\PlatiOnline\Gateway;
use ByTIC\Payments\Models\Purchase\Traits\IsPurchasableModelTrait;

/**
 * Class PurchaseResponse
 * @package Paytic\Payments\PlatiOnline\Message
 *
 * @method CompletePurchaseResponse send
 */
class CompletePurchaseRequest extends AbstractCompletePurchaseRequest
{
    use HasModelRequest;
    use Traits\CompletePurchaseTrait;
}
