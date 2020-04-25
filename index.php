<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/stylep2.css">

    <title>Viko on the beat</title>

</head>

<body>

    <?php include ("header.php");?>
    

        <!-- TEST RECUP LOGS FORMULAIRE-->

        <h2 id="titre_h2">UDEMY COURS FORMULAIRE</h2>

 <!-- SCRIPT PHP-->



<p>Veuillez saisir un mot de passe et un pseudo et un email</p>

<form method="POST" action="secret.php">

    <input type="pseudo" name="pseudo" placeholder="Pseudo"  >
    </br>
    <input type="password" name="password" placeholder="Mot de passe"  >
    </br>
    <input type="email" name="email" placeholder="Email" >
    <input type="submit">

</form>

    <!-- PREMIERE SECTION -->

<br>
<br>
<br>

    <h2 id="titre_h2">FORMULAIRE OPEN CLASS ROOM TEST</h2>

<br>
<br>
<br>

<p>Veuillez saisir le mot de passe secret que vous avez reçu</p>

<br>

<form method="POST" action="openclasstest.php">

    <input type="password" name="password" placeholder="Mot de passe" required >
    <input type="submit">

</form>

<h1 id="titre_h2">Essais un peu nuls</h1>


<?php 
$age = 58;
$prenom = "Stephane";
$sexe = "Masculin";
$prix = 25 + 48;
$total = 485;
$adulte = false;
?>

<?php
echo
"<p style=color:blue> Salut mon prénom est $prenom et je suis de sexe $sexe et je suis agé de $age ans <p>";
echo
"<p style=color:green> J'ai acheté pour $total $ de fruits et légumes, c'est fou mais j'ai eu une réduc d'au moins $prix $ ! <p>";
?>

<br>
<br>

<?php 
if ($age > 10) 
{
    echo "Vous avez la patate !";
}
else 
{
    echo "Vous êtes une vieille branche, désolé d'être franc";
}
?>

<br>
<br>

<?php
if (($age AND $adulte) == true)
{
    echo "Tu es ce bon vieux Steph' !";
}
else
{
    echo "Tu es un escroc, tu n'es pas Stéphane !";
}
?>




</body>

</html>