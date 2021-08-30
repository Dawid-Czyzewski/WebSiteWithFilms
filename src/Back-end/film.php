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

            $connection = new mysqli($serwer,$dataBaseUser,$password,$dataBaseName);

            if($connection->errno != 0){
                echo "Error: ".$connection->errno;
            }else{
                $sql = "SELECT * FROM film";

                $result = $connection->query($sql);

               

                while($row = $result->fetch_assoc()){
                    $film = new film($row["id"],$row["title"],$row["category"],$row["director"],$row["imagePath"]);

                    echo '<div class = "film">';
                    echo "<img src = ".$film->imagePath.">"."<br>";
                    echo '<div>';
                    echo "Title: ".$film->title."<br>"." Direction: ".$film->director."<br>"." category: ".$film->category;
                    echo "</div>";
                    echo '</div>';
                }
                
            }

            $connection->close();
        }
    }
?>
