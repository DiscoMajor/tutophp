<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/stylep2.css">

    <title>Viko on the beat</title>

</head>

<body>

    <?php include ("header.php");?>
    
    <!-- PREMIERE SECTION -->

    <h2 id="titre_h2">TRY TRY TRY</h2>

<?php
    if (isset ($_POST['password']) AND $_POST['password'] == "chacal")
{
?>
<p> Vous avez le bon MDP voici les codes : 465465654654</p>
<?php
}
    else 
{
    echo '<p>Désolé vous avez échoué</p>';
}
?>

<p>--------------------------------------------------------------</p>
<p>--------------------------------------------------------------</p>
<p>--------------------------------------------------------------</p>
<p>--------------------------------------------------------------</p>


    <!-- RECUP MOT DE PASSE-->
    <h2 id="titre_h2">MOT DE PASSE</h2>

<?php 

$erreur = '';

if (!empty ($_POST['email']) AND !empty($_POST['password'])) {
    $email= htmlspecialchars($_POST['email']);
    $password = htmlspecialchars ($_POST['password']);
} else {
    $erreur = 'C\'est mort frere';
}
?>

<?php if($erreur) { ?> 
<p style="color:red"> <?= $erreur ?> </p>
<?php } else { ?>
    <p>Vous êtes connecté avec l'email <?= $email ?> et le mot de passe <?= $password ?></p>
<?php } ?>

<a href="/"> Back à l'accceuil</a>


</body>

</html>