<?php

$source_file = __DIR__ . '/data.json';

$json_data = file_get_contents($source_file);

$cards = json_decode($json_data, true);

header('Content-Type: application/json');
echo json_encode($cards);
