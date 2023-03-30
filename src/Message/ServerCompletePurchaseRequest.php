<?php
declare(strict_types=1);

namespace Paytic\Payments\PlatiOnline\Message;

use Paytic\Omnipay\PlatiOnline\Message\ServerCompletePurchaseRequest as AbstractServerCompletePurchaseRequest;
use Paytic\Payments\Gateways\Providers\AbstractGateway\Message\Traits\HasModelRequest;

/**
 * Class ServerCompletePurchaseRequest
 * @package Paytic\Payments\PlatiOnline\Message
 */
class ServerCompletePurchaseRequest extends AbstractServerCompletePurchaseRequest
{
    use HasModelRequest;
    use Traits\CompletePurchaseTrait;

    /**
     * @inheritDoc
     */
    protected function parseNotification()
    {
        $return = parent::parseNotification();
        $return = json_decode(json_encode($return));
        if ($return->f_order_number) {
            $model = $this->findModel((string) $return->f_order_number);
            if (is_object($model)) {
                $this->setModel($model);
            }
        }
        return $return;
    }
}
