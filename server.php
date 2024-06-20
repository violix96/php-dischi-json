<?php
// ottenere dischi da file json

$data = [
    [
        'artist' => 'Bob Dylan',
        'song' => 'Like a Rolling Stone'
    ],
    [
        'artist' => 'The Beatles',
        'song' => 'Hey Jude'
    ],
    [
        'artist' => 'Queen',
        'song' => 'Bohemian Rhapsody'
    ],
    [
        'artist' => 'Michael Jackson',
        'song' => 'Thriller'
    ],
    [
        'artist' => 'Elvis Presley',
        'song' => 'Can\'t Help Falling in Love'
    ]
];

header('Content-Type: application/json');

echo json_encode($data);
