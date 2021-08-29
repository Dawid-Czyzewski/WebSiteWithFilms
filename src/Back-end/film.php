<?php
    class Film{
        public int $id;
        public string $title;
        public string $category;
        public string $director;

        public function __construct(int $id, string $title, string $category, string $director){
            $this->director = $director;
            $this->title = $title;
            $this->category = $category;
            $this->id = $id;
        }
    }
?>
