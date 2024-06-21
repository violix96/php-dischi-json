<?php
// ottenere dischi da file json

$data = [
    [
        'artist' => 'Bob Dylan',
        'song' => 'Like a Rolling Stone',
        'cover' => 'img/Bob Dylan.jpeg',
        'year' => 1965
    ],
    [
        'artist' => 'The Beatles',
        'song' => 'Hey Jude',
        'cover' => 'img/Beatles2.webp',
        'year' => 1968
    ],
    [
        'artist' => 'Queen',
        'song' => 'Bohemian Rhapsody',
        'cover' => 'img/queen2.jpeg',
        'year' => 1975
    ],
    [
        'artist' => 'Michael Jackson',
        'song' => 'Thriller',
        'cover' => 'img/mj.jpeg',
        'year' => 1982
    ],
    [
        'artist' => 'Elvis Presley',
        'song' => "Can't Help Falling in Love",
        'cover' => 'img/elvis.jpeg',
        'year' => 1961
    ]
];

// informa il client che il server sta per inviare una risposta in formato JSON
header('Content-Type: application/json');

echo json_encode($data);
