<?php
// phpinfo ();
 @$nom=$_POST["nom"];
 @$prenom=$_POST["prenom"];
 @$age=$_POST["age"];
 @$valider=$_POST["valider"];
 $erreur="";
 
 if (isset($valider)){ 
 if (empty($nom)) $erreur="<li>nom laisse vide</li>";
 if (empty($prenom)) $erreur.="<li>Prenom laisse vide</li>";
 if (!is_numeric($age) or $age<12) $erreur.="<li>age invalide</li>";
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>Inscription</header>
    <section>
    <form action="" name="fo" method="post">
    <label for="name" class="label">Nom</label>
    <div class="input">
    <input type="text" name="nom" value="<?php echo $nom?>"/>
    </div>
    
    <label for="name" class="label">Prenom</label>
    <div class="input">
    <input type="text" name="prenom"  value="<?php echo $prenom?>"/>
    </div>
    
    <label for="Age" class="label">Age</label>
    <div class="input">
    <input type="number" min="12" name="age"  value="<?php echo $age?>"/>
    </div>
    
    <div class="input">
    <input type="submit" name="valider" value="m'imscrire">
    </div>
    </form>
    <?php if(!empty($erreur)){ ?>
    <div id="erreur"><?php echo $erreur ?></div>
<?php } ?>
    </section>
</body>
</html>