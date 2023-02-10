<?php

$source_file = __DIR__ . '/data.json';

$json_data = file_get_contents($source_file);

header('Content-Type: application/json');
echo $json_data;
