<?php
declare(strict_types=1);

namespace Paytic\Payments\PlatiOnline\Message;

use Paytic\Omnipay\PlatiOnline\Message\CompletePurchaseRequest as AbstractCompletePurchaseRequest;
use Paytic\Payments\Gateways\Providers\AbstractGateway\Message\Traits\HasModelRequest;

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
