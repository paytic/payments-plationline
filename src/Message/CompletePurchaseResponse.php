<?php

namespace Paytic\Payments\PlatiOnline\Message;

use Paytic\Omnipay\PlatiOnline\Message\CompletePurchaseResponse as AbstractCompletePurchaseResponse;
use ByTIC\Payments\Gateways\Providers\AbstractGateway\Message\Traits\CompletePurchaseResponseTrait;

/**
 * Class CompletePurchaseResponse
 * @package Paytic\Payments\PlatiOnline\Message
 */
class CompletePurchaseResponse extends AbstractCompletePurchaseResponse
{
    use CompletePurchaseResponseTrait;

    /** @noinspection PhpMissingParentCallCommonInspection
     * @return bool
     */
    protected function canProcessModel()
    {
        return true;
    }

    /**
     * @return []
     */
    public function getSessionDebug()
    {
        $notification = $this->getNotification();
        if ($notification instanceof \SimpleXMLElement) {
            $objJsonDocument = json_encode($notification);
            return json_decode($objJsonDocument, true);
        }
        return [];
    }
}
