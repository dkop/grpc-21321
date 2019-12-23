<?php

require_once __DIR__ . '/vendor/autoload.php';

use Google\Cloud\Spanner\SpannerClient;

$ret = 0;
system('php -i | fgrep grpc', $ret);
echo '>>>>>>>>>>>>>>>>>>>>>>>>> 1st system call return code is ', $ret, PHP_EOL;

$spanner = new SpannerClient(['projectId' => 'grpc segfault']);

system('php -i | fgrep grpc', $ret);
echo '>>>>>>>>>>>>>>>>>>>>>>>>> 2nd system call return code is ', $ret, PHP_EOL;