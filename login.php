<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRANews</title>
    <link rel="stylesheet" href="mainstyle.css">
</head>
<body>
<div class="header">
        <a href="mainpage.html"><img src="logo.png" class="logo"></a> 
        <!--<div class="text"-->
            <button style="margin-right:10px"> <a href="signup.html" style="margin-right:20px; color :#87b22d;text-decoration:none;">Sign in</a></button>
        <!--</div>-->
    </div>
<?php
    try
    {
    // connexion à la base de données magasin
    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root',''); 
    }
    catch(Exception $e)
    {
    // En cas d'erreur, on affiche un message et on quitte la page
    die('Erreur : '.$e->getMessage());
    }
    // Si on passe à l’exécution des instructions suivantes c’est que tout s’est bien passé lors de la connexion à la base
    // On récupère toutes les données contenues dans la table « Clients »
    $reponse = $db->query("SELECT * FROM registration");
    // En utilisant une boucle, on affiche chaque entrée (ligne) lue dans le résultat retourné
    $i=0 ;
    while ($entree = $reponse->fetch())
    {
        $a=0;
        $i++ ;
        if ($entree['email']== $_POST['email'] && $entree['password']==$_POST['password'] ){
            echo("hello");
            $a=1;
            break;
        }
}
if ($a==0) {echo ("introuvable");}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
	<hr style="border-color: #87b22d;">
<footer class="footersite">
    <div class="container">
        <div class="row">
            <div class="col1">
                <h3>ACTU</h3>
                <u1>
                    <li>National</li>
                    <li>Regional</li>
                    <li>International</li>
                    <li>Politique</li>
                    <li>Economique</li>
                </u1>
            </div>
            <div class="col1">
                <h3>SPORT</h3>
                <u1>
                    <li>Actu sport</li>
                    <li>Resultats</li>
                    <li>Classement</li>
                    <li>Galerie</li>
                </u1>
            </div>
            <div class="col1">
                <h3>Social media</h3>
                <u1>
                    <li>Instagram news</li>
                    <li>Fb news</li>
                    <li>Twitter</li>
                </u1>
            </div>
           
        </div>
        <div class="row1">
            <div>
            <h3>FOLLOW US</h3>
        </div>
        <div>
            <a href="https://www.instagram.com/lp_lapresse/" target="_blank"><img  style="width:50px;" src="instagram.png"></a>
            <a href="https://www.facebook.com/LaPresseFB/" target="_blank"><img style="width:50px;" src="facebook.png"></a>
            <a href="https://twitter.com/lp_lapresse" target="_blank"><img style="width:50px;" src="twitter.png"></a>
        </div>
        </div>
    </div>
</footer>
	</body>
	</html>