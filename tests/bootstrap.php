<?php

declare(strict_types=1);

$configData =  [
    'gateways' => ['PlatiOnline']
];

require __DIR__.'/../vendor/paytic/payments-tests/src/boostrap/bootstrap.php';

putenv('PLATIONLINE_PUBLIC_KEY=' . gzinflate(base64_decode(envVar('PLATIONLINE_PUBLIC_KEY'))));
putenv('PLATIONLINE_PRIVATE_KEY=' . gzinflate(base64_decode(envVar('PLATIONLINE_PRIVATE_KEY'))));