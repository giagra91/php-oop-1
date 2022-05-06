<?php
    
class  Movie {
    public $title;
    public $originalTitle;
    public $year;
    public $genre;
    public $language;
    
    function __construct($title, $originalTitle, $year, $genre, $language = null){
        $this->title = $title;
        $this->originalTitle = $originalTitle;
        $this->year = $year;
        $this->genre = $genre;
        $this->language = $language;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

};

$una_volta_hollywood = new Movie("C'era una volta a... Hollywood", "Once Upon a Time in Hollywood", 2019, "commedia, drammatico");
$bastardi_senza_gloria = new Movie("Bastardi senza gloria", "Inglorios bastards", 2009, "guerra, azione, thriller");
$inception = new Movie("Inception", "Inception", 2010, "azione, fantascienza, thriller, avventura");

?>