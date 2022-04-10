<?php

 class Movie {
     public $title;
     public $original_title;
     public $genre;
     public $vote;
     

     function __construct(string $_title,string $_original_title, string $_genre,int $_vote){
         $this->title = $_title;
         $this->original_title = $_original_title;
         $this->genre = $_genre;
         $this->vote = $_vote;
         
         
     }

     public function movieOverview(){
         if($this->title == $this->original_title){

            return $this->title . '<br>' . $this->genre . '<br>' . $this->vote . '<br>';
         }
         else{
            return $this->title . '<br>' . $this->original_title . '<br>' . $this->genre . '<br>' . $this->vote. '<br>' ;
         }
          
    }


 }