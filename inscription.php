<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/form.js"></script>
    <title>Inscription</title>
</head>
<body>
    <nav> 
        <div class="logo">
        <a href="index.php"><img src="Assets/img/ODK Logo.png" alt="Logo" class="icon"></a>
          </div>
          

        <ul>
          <li><a href="index.php">Acceuil</a></li>
          <li><a href="Liste.php">Liste</a></li>
        </ul>
      </nav>
       
       <section>
      <form action="php/insertion.php"  method="post" id="form" name="formulaire" class="formulaire" onsubmit="return validation()">
        <h1>Inscription</h1>
         <div id="erreur"></div>
        <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom"  required><br>
        <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" required ><br>
        <label for="" class="lbl" >Date de naissance : </label><br><input type="date" name="date" id="date" required ><br>
        <input type="text" name="email" id="email" placeholder="Entrez votre email"  ><br>
        <input type="text" name="tel" id="tel" placeholder="Entrez votre numéro" required ><br>
        <input type="text" name="promotion" id="promotion" placeholder="Entrez votre promotion" required ><br>
        <input type="text" name="annee" id="annee" placeholder="Entrez votre annnée certification" required ><br>
        <label for=""class="lbl">Photo : </label><input type="file" name="photo" id="photo"  ><br>
        <span id="error"></span>
        <input type="submit" value="Valider" class="btn_valid">
      </form>
    </section>

      <img src="assets/img/Group4.png" alt="" class="home-img2">
      <audio src="sound/Windows error.mp3" id="error_sound"></audio>
      <audio src="sound/success.mp3" id="succes_sound"></audio>
      <audio src="sound/mail_incorrect.mp3" id="mail_incorrect"></audio>
      <audio src="sound/tel_incorrect.mp3" id="mail_incorrect"></audio>

    
</body>
</html>