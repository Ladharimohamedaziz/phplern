<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post" action="">
        <input type="text" name="titre" placeholder="titre">
        <input type="text" name="auteur" placeholder="auteur">
        <input type="text" name="isbn" placeholder="isbn">
        <input type="text" name="livre" placeholder="livre">
        <input type="submit">
    </form>
    <?php
    class book
    {
        private $titre;
        private $auteur;
        private $isbn;
        private $livre;
        public  function __construct($titre, $auteur, $isbn, $livre)
        {
            $this->titre = $titre;
            $this->auteur = $auteur;
            $this->isbn = $isbn;
            $this->livre = $livre;
        }
        public function getname()
        {
            return $this->titre;
        }
        public function setname($titre)
        {
            $this->titre = $titre;
        }
        public function getauteur()
        {
            return $this->auteur;
        }
        public function setauteur($auteur)
        {
            $this->auteur = $auteur;
        }
        public function getlivre()
        {
            return $this->livre;
        }
        public function setlivre($livre)
        {
            $this->livre = $livre;
        }
        public function getisbn()
        {
            return $this->isbn;
        }
        public function setisbn($isbn)
        {
            $this->isbn = $isbn;
        }

        public function displayInfo()
        {
            echo "\n <br>";
            echo "Titre : " . $this->getname() . "<br>";
            echo "Auteur : " . $this->getauteur() . "<br>";
            echo "Isbn  : " . $this->getisbn() . "<br>";
            echo "Livre  : " . $this->getlivre() . "<br>";
        }
    }
    function Add() {}

    function more(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titre = $_POST["titre"] ?? "Unknown";
        $auteur = $_POST["auteur"] ?? "Unknown";
        $isbn = $_POST["isbn"] ?? "Unknown";
        $livre = $_POST["livre"] ?? "Unknown";
    }
    $newbook = new book($titre, $auteur, $isbn, $livre);
    $newbook->displayInfo();
    }

function Addmore(){
    for($i;i>5;$i++){
        more();
    }
}


    ?>
</body>
</body>

</html>