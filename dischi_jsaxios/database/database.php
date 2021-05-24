<?php

    $database = [
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
            'genre' => 'Rock'
        ],
        [
            'title' => 'Live at Wembley 86',
            'author' => 'Queen',
            'year' => 1992,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
            'genre' => 'Pop'
        ],
        [
            'title' => 'Ten\'s Summoner\'s Tales',
            'author' => 'Sting',
            'year' => 1993,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
            'genre' => 'Pop'
        ],
        [
            'title' => 'Steve Gadd band',
            'author' => 'Steve Gadd Band',
            'year' => 2018,
            'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
            'genre' => 'Jazz'
        ],
        [
            'title' => 'And Justice for All',
            'author' => 'Metallica',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg',
            'genre' => 'Metal'
        ],
        [
            'title' => 'One more car, one more rider',
            'author' => 'Eric Clapton',
            'year' => 2002,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
            'genre' => 'Rock'
        ]
    ];

    $authors = [];
    foreach ($database as $author) {
        if (!in_array($author['author'], $authors)) {
            array_push($authors, $author['author']);
        }
    }
    
    $query = $_GET['query'];

    function filter_array($array,$term){
        $matches = array();
        foreach($array as $a){
            if($a['author'] == $term)
                $matches[]=$a;
        }
        return $matches;
    }
    
    
    if ($query == 'All'){
        $database = ['full_list' => $database, 'authors' => $authors];
    }else{
        $database = ['full_list' => filter_array($database, $query), 'authors' => $authors];
    }
    


    // Content type
    header('Content-Type: application/json');

    // Convert data in json
    echo json_encode($database);

?>