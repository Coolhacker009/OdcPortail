<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Liste</title>
</head>

<body>
<nav>
    <div class="logo">
    <a href="index.php"><img src="Assets/img/ODK Logo.png" alt="Logo" class="icon"></a>
          </div>
          

        <ul>
          <li><a href="index.php">Acceuil</a></li>
          <li><a href="inscription.php">Inscription</a></li>
        </ul>
      </nav>
      <h1 class="txt3">Liste des apprenants</h1>

      <section class="liste">
      <table>
        <tr class="items">
            <th class="list_img">Photo</th>
            <th>Matricule</th>
            <th>Promotion</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Email</th>
        </tr>
        <?php 
           include_once "php/connexion.php";
           $sql = mysqli_query($con, "SELECT * FROM apprenants");
           if (mysqli_num_rows($sql) > 0) {
              $row = mysqli_fetch_assoc($sql);
           }
         ?>

            
            <tr>
            <td><?php echo $row["img"]?></td>
            <td><?php echo $row["matricule"]?></td>
            <td><?php echo $row["promotion"]?></td>
            <td><?php echo $row["prenom"]?></td>
            <td><?php echo $row["nom"]?></td>
            <td><?php echo $row["email"]?></td>
            
            </tr>
            
          
        
      
      </table>
      <a href="inscription.php"><button type="button" class="btn_ajout">Ajouter</button></a>
      </section>
      
      <img src="assets/img/Group5.png" alt="" class="home-img3">
</body>
</html>