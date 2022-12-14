<?php
declare(strict_types=1);

namespace Paytic\Payments\PlatiOnline\Tests\Message;

use Paytic\Payments\PlatiOnline\Message\CompletePurchaseRequest;
use Paytic\Payments\PlatiOnline\Message\CompletePurchaseResponse;
use Paytic\Payments\Tests\AbstractTest;
use Paytic\Payments\Tests\Gateways\Message\CompletePurchaseResponseTestTrait;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class CompletePurchaseResponseTest
 * @package Paytic\Payments\PlatiOnline\Tests\Message
 */
class CompletePurchaseResponseTest extends AbstractTest
{
    use CompletePurchaseResponseTestTrait;

    protected function getNewResponse(): CompletePurchaseResponse
    {
        $request = new CompletePurchaseRequest($this->client, new Request());

        return new CompletePurchaseResponse($request, []);
    }
}
