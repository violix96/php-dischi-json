<?php
// ottenere dischi da file json

$data = [
    [
        'artist' => 'Bob Dylan',
        'song' => 'Like a Rolling Stone',
        'cover' => 'img/Bob Dylan.jpeg'
    ],
    [
        'artist' => 'The Beatles',
        'song' => 'Hey Jude',
        'cover' => 'img/Beatles2.webp'

    ],
    [
        'artist' => 'Queen',
        'song' => 'Bohemian Rhapsody',
        'cover' => 'img/queen2.jpeg'

    ],
    [
        'artist' => 'Michael Jackson',
        'song' => 'Thriller',
        'cover' => 'img/mj.jpeg'

    ],
    [
        'artist' => 'Elvis Presley',
        'song' => 'Can\'t Help Falling in Love',
        'cover' => 'img/elvis.jpeg'

    ]
];

header('Content-Type: application/json');

echo json_encode($data);
