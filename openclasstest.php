<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/stylep2.css">

    <title>Viko on the beat</title>

</head>

<body>

    <?php include ("header.php");?>
    

<br>
<br>
<br>
<br>

        <h2 id="titre_h2">MOT DE PASSE</h2>

<br>

<?php

$erreur = '';

if (!empty ($_POST['password']) AND ($_POST['password']) == "yo" AND !empty($_POST['prenom']) AND ($_POST['prenom']) == "jacky" AND !empty ($_POST['email'])){
        $prenom = htmlspecialchars ($_POST['prenom']);
        $email = htmlspecialchars ($_POST['email']);
        $password = htmlspecialchars ($_POST['password']);
} else {
    $erreur = "Accés au site refusé, veuillez quitter cet endroit";
} ?>

<?php 
if ($erreur){ ?>
    <?= $erreur ?>
<?php } else {  ?>
<p>Vous vous êtes connecté avec le mail <?=$email?> et le prenom <?=$prenom?> vous avez donc accés aux codes 7695-17416712-73167-212</p>
<?php } ?> 


<br>

<a href="/"> Back à l'acceuil</a>


</body>

</html>