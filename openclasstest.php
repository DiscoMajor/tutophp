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
<br>

<?php

    if (isset ($_POST['password']) AND ($_POST['password']) == "salut")
{
?>
<p>Voici les codes 4646464654654444</p>

<?php } else {
    echo  'MAUVAIS MOT DE PASSE ENTRE';
}
?>

<br>



<a href="/"> Back à l'acceuil</a>


</body>

</html>