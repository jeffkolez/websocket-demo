<?php
namespace MyApp;
use Ratchet\Wamp\WampServerInterface;
use Ratchet\ConnectionInterface;

class WampDemo implements WampServerInterface {
    protected $clients;

    public function __construct()
    {
        $this->clients = new \SplObjectStorage;
    }

    public function onCall(ConnectionInterface $conn, $id, $topic, array $params)
    {
        echo "Calling $topic\n";

    }

    public function onSubscribe(ConnectionInterface $conn, $topic)
    {
        echo "Subscribing to $topic\n";
    }

    public function onUnSubscribe(ConnectionInterface $conn, $topic)
    {
        echo "Unsubscribing to $topic\n";
    }

    public function onPublish(ConnectionInterface $conn, $topic, $event, array $exclude, array $eligible)
    {
        echo "Publishing to $topic\n";
    }

    public function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);
        echo "Connected\n";
    }

    public function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);
        echo "Closed\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "An error has occurred: {$e->getMessage()}\n";
        $conn->close();
    }

}
