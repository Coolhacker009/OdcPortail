<?php 
        $prenom = $_POST["prenom"];
        $nom = $_POST["nom"];
        $date = $_POST["date"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $promotion = $_POST["promotion"];
        $anne = $_POST["anne"];

        $con = new mysqli("localhost", "root", "", "portal");

        if ($con ->connect_error) {
            die("Vous n'êtes connecté à la base de données : " .$con ->connect_error)
        }else {
            
        }
?>