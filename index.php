<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/stylep2.css">

    <title>Viko on the beat</title>

</head>

<body>

    <?php include ("header.php");?>
    

        <!-- TEST RECUP LOGS FORMULAIRE-->

        <h2 id="titre_h2">MOT DE PASSE</h2>

<p>Veuillez saisir un mot de passe et un pseudo</p>

<form method="POST" action="secret.php">

    <input type="email" name="email" placeholder="Email" required >
    </br>
    <input type="password" name="password" placeholder="Mot de passe" required >
    </br>
    <input type="submit">

</form>




    <!-- PREMIERE SECTION -->

    <h2 id="titre_h2">??????????????????</h2>

    <div id="tableur_ect">

        <div>

            <table>
                <tr>
                    <th>Prénom</th>
                    <th>Âge</th>
                    <th>Passion</th>
                </tr>
                <tr>
                    <td>Victor</td>
                    <td>26 ans</td>
                    <td>Pêche à main nue</td>
                </tr>

                <tr>
                    <td>Dany</td>
                    <td>56 ans</td>
                    <td>Bowling sur Wii</td>
                </tr>
                <tr>
                    <td>Kévin</td>
                    <td>29 ans</td>
                    <td>Gonflette et marcel</td>
                </tr>
            </table>
        </div>

        <div>
            <form method="post" action="mapage.php">
                <input type="date" name="date" id="date"><br>
                <input type="email" name="email" id="email" placeholder="Enter email here"><br>
                <input type="password" name="paswword" id="Password"><br>
        </div>

        <div>
            <p><textarea name="textarea" id="textarea" placeholder="Talk about your life"></textarea></p>
        </div>
        <div>
            <p>COLOR PICKER</p>
            <input type="color">
        </div>

        <div>
            <p>Kevin est bien trop fort ?</p>
            <input type="radio" name="fort"> YES ofc
            <input type="radio" name="fort"> Dunno bro
            <input type="radio" name="fort">Hell no.
        </div>
        </form>

    </div>


    <h2 id="titre_h2">TABLEAU + FORMULAIRE</h2>

    <div class="trashtext">
        <p>narrow wedge of light from a half-open service hatch framed a heap of discarded fiber optics and the chassis of a heroin factory. Then a mist closed over the black water and the robot gardener. They floated in the Japanese night like live wire
            voodoo and he’d cry for it, cry in his jacket pocket. All the speed he took, all the turns he’d taken and the robot gardener. Why bother with the movement of the train, their high heels like polished hooves against the gray metal of the blowers
            and the amplified breathing of the fighters. Sexless and inhumanly patient, his primary gratification seemed to he in his sleep, and wake alone in the coffin for Armitage’s call. The Tessier-Ashpool ice shattered, peeling away from the Chinese
.</p>
    </div>


    <h2 id="titre_h2">JE FAIS DES TESTS SUR DU PHP LES GARS</h2>

    <p>
            <?php echo "Je fais des essais tout d'abord"; ?><br />
            <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
    </p>

<?php $num1=8;
$num2=15;
$num3=20;

echo $num2 + $num1; 
echo $num2 / $num3; 
echo $num1 + $num1 * $num3; 
?>

<?php
$myArray[0] = "John";
$myArray[1] = "<strong>PHP</strong>";
$myArray[2] = 21;

echo "$myArray[0] is $myArray[2] and knows $myArray[1]";

// Outputs "John is 21 and knows PHP"
?>
        <br>

<?php
$nom = 'JackyBobby';
$age = 45;
echo 'Le visiteur à ' . $age . ' et il est en pleine forme et son prénom est ' . $nom . ',c\'est vraiment super beau';
?>
        <br>
<?php
$prix = 12.50;
$quantite = 5;
echo 'Le prix est de ' . $prix * $quantite . ' c\'est vraiment pas donné'; // Metre \* pour pouvoir f'aire un guillemet
?>
<br>
<?php
$age = 77;

if ($age <= 60)
{
    echo "Vous pouvez entrer sur ce site";
    $autorisation_enter= "Oui";
}
else
{
    echo "Vous ne pouvez pas entrer";
    $autorisation_enter= "Non";
}
?>
<br><br>

<?php

$autorisation_enter = true;

if (! $autorisation_enter)
{
    echo "Coucou tu es nouveau sur mon site ?";
}
else
{
    echo "Désolé mais tu n'as rien à faire ici";
}
?>
<br>
<?php
$age = 12;
$nationalite = "french";

if ($age <= 45 and $nationalite == "french")
{
    echo "Bienvenu à toi mon boug.";
}
elseif ($age <= 18 and $nationalite == "english")
{
    echo "Hello my old friend, glad to see you again.";
}
?>

<?php
$pays = "France";

if ($pays == "Afrique" OR $pays == "Chine" OR $pays = "France")
{
    echo "De nouveau ici l'ami ?";
}
else
{
    echo "Tu peux partir d'ici maintenant, c'est pas ton site";
}
?>
<br>
<?php
$note = 0;

switch ($note)
{
    case 0:
        echo "Tu es franchement loin du compte";
    break;
    case 10:
        echo "Tu es vraiment limite";
    break;
    case 20:
        echo "Tu es vraiment chaud !!";
    break;
    default:
    echo " J'ai rien pour toi avec cette note";
}
?>
<br>
<br>
<?php

for ($loop = 1 ; $loop <= 5 ; $loop++)
{
    echo "Je test les loops ici même si c'est pas hyper utilisé. Quelle expérience incroyable. ";
}
?>
<br>

<?php
$personne = array ('nom' => 'Hechara','prenom' => 'Tatiana', 'age' => '28 ans');

print_r ($personne);
?>

<h2 id="titre_h2">ENCORE DES TRUCS</h2>

    <!-- Etre sur que la valeur existe et trouver le nom et prenom automatiquement -->

<p>
<?php
if (isset($_GET['nom']) AND isset ($_GET['prenom']))
{
echo 'Salut, ' . $_GET['nom'] . ' ' . $_GET['prenom']; 
}
else{
    echo 'Pas de compte retrouvé';
}
?>
</p>

    <!-- FOOTER -->

    <div>
<?php include "footer.php";?>
    </div>

</body>

</html>