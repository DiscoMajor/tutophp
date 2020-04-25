
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/stylep2.css">

    <title>Viko on the beat</title>

</head>

<body>

    <?php include ("header.php");?>
    

    <!-- RECUP MOT DE PASSE-->
    
    <h2 id="titre_h2">MOT DE PASSE</h2>

<?php

$erreur = '';

if (!empty ($_POST['password']) AND !empty ($_POST['pseudo']) AND !empty ($_POST['email'])) {
    $password = htmlspecialchars ($_POST['password']);
    $pseudo = htmlspecialchars ($_POST['pseudo']);
    $email = htmlspecialchars ($_POST['email']);
} else {
    $erreur = 'Veuillez remplir le formulaire';
}
?>

<?php if ($erreur) { ?>
<p style='color:red'> <?= $erreur ?> </p>
<?php } else { ?>
    <p>Vous êtes connecté avec le pseudo, <?=$pseudo?> , le mot de passe <?=$password?>  et avec cet email <?=$email?></p>
<?php } ?>


</body>

</html>