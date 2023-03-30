<?php	

    class Libro {

        protected $name;
        protected $author;
        protected $genre;
        protected $date;

        function __construct($name, $author, $genre, $date)
        {
            $this->name = $name;
            $this->author = $author;
            $this->genre = $genre;
            $this->date = $date;
        }

        public function getName(){
            return $this->name."</br>";
        }
        public function getAuthor(){
            return $this->author."</br>";
        }
        public function getGenre(){
            return $this->genre."</br>";
        }
        public function getDate(){
            return $this->date."</br>";
        }

        public function setName($newName){
            $this->name = $newName;
        }
        public function setAuthor($newAuthor){
            $this->author = $newAuthor;
        }
        public function setGenre($newGenre){
            $this->genre = $newGenre;
        }
        public function setDate($newDate){
            $this->date = $newDate;
        }

        public function arrayData(){
            
            // $data = (array) $this;   /*1 forma*/

            // var_dump(get_object_vars($this));  /*2 forma*/

            $data = [
                "Título" => "{$this->name}",
                "Autor" => "{$this->author}",
                "Género" => "{$this->genre}",
                "Publicación" => "{$this->date}"
            ];

            var_dump($data);
        }
    }

    class AudioLibro{

        protected $platform;
        protected $chapters;
        protected $duration;

        function __construct($platform, $chapters, $duration)
        {
            $this->platform = $platform;
            $this->chapters = $chapters;
            $this->duration = $duration;
        }

    }


    $libro1 = new Libro("El Señor de los Anillos", "JRR Tolkien", "Fantasía medieval", "1954");
    $libro2 = new Libro("El nombre del viento", "Patrick Routhfuss", "Fantasía medieval", "2007");

    echo $libro1->getName();
    echo $libro2->getName();
    
    echo $libro1->setName("La comunidad del Anillo");
    echo $libro2->setName("El Temor de un Hombre Sabio");
    
    echo $libro1->getName();
    echo $libro2->getName();

    echo $libro1->arrayData()."</br>";
    echo $libro2->arrayData()."</br>";
    ?>