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
<br>
<br>
<br>
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
</body>

</html>