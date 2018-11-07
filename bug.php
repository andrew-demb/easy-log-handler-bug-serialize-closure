<?php

require 'vendor/autoload.php';
require 'SerializableObj.php';

$easyLogHandler = new \EasyCorp\EasyLog\EasyLogHandler('log/stream.log');

$logger = new \Monolog\Logger(
    'app',
    [
        new \Monolog\Handler\BufferHandler(
            $easyLogHandler,
            1,
            \Monolog\Logger::DEBUG,
            true,
            true
        ),
    ]
);

$logger->info('Simple message', ['obj' => new \stdClass()]);
$logger->info('Message with throwable', ['obj' => new \Exception()]);
$logger->emergency('Problem message', ['obj' => new \SerializableObj()]);


