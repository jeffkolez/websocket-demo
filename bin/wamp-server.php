<?php
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Ratchet\Wamp\WampServer;
use Ratchet\Cookbook\OpenPubSub;

require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/src/MyApp/WampDemo.php';

use MyApp\WampDemo;

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new WampServer(
                new WampDemo
            )
        )
    )
  , 8080
);
$server->run();
