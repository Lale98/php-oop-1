<?php 
    class Movie {
        public $title;
        public $gen;
        public $data;
        public $duration;
        public $vote;

        public function setVote() {
            $this->vote = rand(0,10);
        }

        function __construct($_title,$_gen) {
            $this->title = $_title;
            $this->gen = $_gen;
            $this->data = date("j F Y");
        }

        
    }

    $spiderman = new Movie('Spiderman', 'action');
    $spiderman->setVote();
    
    $iron_man = new Movie('Iron Man','action');
    $iron_man->setVote();

    var_dump($iron_man, $spiderman);
?>