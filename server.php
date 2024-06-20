<?php
// ottenere dischi da file json

$data = [
    [
        'name' => 'vincenzo',
        'age' => 20
    ]
];

header('Content-Type: application/json');

echo json_encode($data);
