<?php

namespace Paytic\Payments\PlatiOnline\Tests\Message;

use Paytic\Payments\PlatiOnline\Message\CompletePurchaseRequest;
use Paytic\Payments\PlatiOnline\Message\CompletePurchaseResponse;
use ByTIC\Payments\Tests\AbstractTest;
use ByTIC\Payments\Tests\Gateways\Message\CompletePurchaseResponseTestTrait;
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
