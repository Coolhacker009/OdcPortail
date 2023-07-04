<?php 
       include_once "connexion.php";

        $prenom = $_POST["prenom"];
        $nom = $_POST["nom"];
        $date = $_POST["date"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $promotion = $_POST["promotion"];
        $annee = $_POST["annee"];

       ($_POST);
        
              /*if(!empty($prenom) && !empty($nom) && !empty($date) && !empty($email) && !empty($tel)
              && !empty($promotion) && !empty($annee)){
                     if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // si l'adresse email est valide
                            //Vérification de l'adresse email si elle existe ou pas dans la base de données
                            $sql = mysqli_query($con, "SELECT email FROM apprenants WHERE email = '{$email}'");
                            if(mysqli_num_rows($sql) > 0){
                                echo "$email - Cette adresse email existe déja !";
                            }else {
                                   
                                   

                            }

              }


       }*/

              // Get reference to uploaded image
       $image_file = $_FILES["photo"];

       // Image not defined, let's exit
       if (!isset($image_file)) {
       die('No file uploaded.');
       }else{

       // Move the temp image file to the images/ directory
       move_uploaded_file(
       // Temp image location
       $image_file["tmp_name"],

       // New image location, __DIR__ is the location of the current PHP file
       __DIR__ . "/photos/" . $image_file["name"]
       );}



              $stmt = $con->prepare("INSERT INTO apprenants (prenom,nom, date_, email, tel, promotion, annee,
              img)
              values (?,?,?,?,?,?,?,?)" );
              $stmt->bind_param(1,$prenom);
              $stmt->bind_param(2,$nom);
              $stmt->bind_param(3,$date);
              $stmt->bind_param(4,$email);
              $stmt->bind_param(5,$tel);
              $stmt->bind_param(6,$promotion);
              $stmt->bind_param(7,$annee);
              $stmt->bind_param(8,$image_file);

              if($stmt->execute()){
                     echo("Enregistrer avec succès");
                     header("location:../Liste.php");
              }
              
             // $stmt->close();
              //$con->close();
            
?>