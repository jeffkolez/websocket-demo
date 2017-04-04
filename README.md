# PHP websocket demo

A demo using PHP with websockets.

There are two websocket demos here. One is a demo using vanilla websockets, the kind that come built-in to your browser - it's a chat server. The second is a demo of websockets using the WAMP v1 protocol. There is more functionality with a WAMP implementation. For more information on WAMP, [click here](http://wamp-proto.org).

## Install

First, clone the repository, then run composer to install dependencies.

```
git clone git@github.com:jeffkolez/ratchet-websocket-demo.git
composer update
```

## Usage

In order to connect a web browser to a websocket server, you have to run a server. That means any time you want to run websockets, you need to run a websocket server.

There are two types of websocket demos included in this demo. The first is a chat server built with vanilla websockets, the second is a ratchet implementation of websockets.

### Websocket only server

To run the chat server (vanilla websockets), run this from the command line:

```
php bin/chat-server.php
```

Then open ```web/websocket.html``` in a web browser. Most people should be fine with the default settings, but you can adjust the IP address and port if necessary. Once you connect, you'll be able to send a message.

Messages will show in the same window as you ran your websocket server:

```
jeff@devlocal:ratchet-websocket-demo$ php bin/chat-server.php
New connection! (45)
Received a new message
string(12) "Hello world!"
```

### WAMP implementation

To run the WAMP server (Ratchet implementation), run this from the command line:

```
php bin/wamp-server.php
```

Then open ```web/wamp.html``` in a web browser. Most people should be fine with the default settings, but you can adjust the IP address and port if necessary.

Once you connect, you'll be able to use pub/sub, or call a remote method:

```
jeff@devlocal:websocket-demo$ php bin/wamp-server.php
Connected
Subscribing to testTopic
Publishing to testTopic
```


