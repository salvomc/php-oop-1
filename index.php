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
        
        public function __construct($title, $year, $genre, $lenght)
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
?>