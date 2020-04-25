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
    if (isset ($_POST['password']) AND ($_POST['password']) == "hola")
     {
        ?>
        <p>Bien vu, vous avez accés à ce site</p>
        
<?php } else {

     echo '<p>Veuillez sortir d\'ici</p>';

} ?>



    <br>

<a href="/"> Back à l'acceuil</a>


</body>

</html>