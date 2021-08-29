<?php
    require_once("connectInfo.php");

    class Film{
        public int $id;
        public string $title;
        public string $category;
        public string $director;
        public string $imagePath;

        public function __construct(int $id, string $title, string $category, string $director, string $imagePath){
            $this->director = $director;
            $this->title = $title;
            $this->category = $category;
            $this->id = $id;
            $this->imagePath = $imagePath;
        }

        public static function showFilms(){
            
        }
    }
?>
