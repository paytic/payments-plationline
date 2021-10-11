<?php

$configData =  [
    'gateways' => ['PlatiOnline']
];

require __DIR__.'/../vendor/bytic/payments-tests/src/boostrap/bootstrap.php';

putenv('PLATIONLINE_PUBLIC_KEY=' . gzinflate(base64_decode(getenv('PLATIONLINE_PUBLIC_KEY'))));
putenv('PLATIONLINE_PRIVATE_KEY=' . gzinflate(base64_decode(getenv('PLATIONLINE_PRIVATE_KEY'))));