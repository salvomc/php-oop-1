<?php

    class Genre {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
    }

    class Movie {
        public $title;
        public $year;
        public $genre;
        public $length;
        public $rating;
        
        public function __construct($title, $year, $genre, $length)
        {
            $this->title = $title;
            $this->year = $year;
            $this->genre = $genre;
            $this->length = $length;
        }

        public function getMovieDetails()
        {
            $string = "Movie: ".$this->title.";<br/>Genre:".$this->genre.";<br/>Duration:"$this->length.";<br/>Year:"$this->year.";<br/>";

            if(this->rating != NULL)
                {
                    $string.= "Rating: ".this->rating.";<br/>";
                }

                $genres_string = implode(',', $genres);
                return $genres_string; 
        }
    }

    $genres = 
    [
        new Genre('Fantascienza'),
        new Genre('Comedy'),
        new Genre('Azione')
    ];
    
    $ride_along = new Movie('Ride Along', $genres, 100, '2014');
    $ride_along->rating = 7;

    $the_avengers = new Movie('The Avengers', $genres, 143, '2012');

    echo $ride_along->getMovieDetails();
    echo "<br/>";
    echo $the_avengers->getMovieDetails();
?>