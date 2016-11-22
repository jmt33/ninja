<?php
use Process\Worker;
require_once 'Autoloader.php';

// Create a Websocket server
$ws_worker = new Worker("mtao");

// 4 processes
$ws_worker->count = 10;

// Emitted when new connection come
$ws_worker->onConnect = function($connection)
{
    echo "New connection\n";
 };

// Emitted when data received
$ws_worker->onMessage = function($connection, $data)
{
    // Send hello $data
    $connection->send('hello ' . $data);
};

// Emitted when connection closed
$ws_worker->onClose = function($connection)
{
    echo "Connection closed\n";
};

// Run worker
Worker::runAll();
