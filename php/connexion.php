<?php
$con = mysqli_connect("localhost", "root", "","portal");
if(!$con){
       echo "Vous n'etes connecté à la base de données ". mysqli_connect_error(); 
}
?>