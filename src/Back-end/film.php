<?php
    

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
            require_once("connectInfo.php");

            $connecttion = new mysqli($serwer,$dataBaseUser,$password,$dataBaseName);

            if($connecttion->errno != 0){
                echo "Error: ".$connecttion->errno;
            }else{
                $sql = "SELECT * FROM film";

                $result = $connecttion->query($sql);

               $row = $result->fetch_assoc();

                echo '<div class = "film">';
                echo "<image src = ".$row["imagePath"].">";
                echo '</div>';
            }

            $connecttion->close();
        }
    }
?>
