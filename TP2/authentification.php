<?php
if(isset($_POST['login']) && isset($_POST['motdp'])) //!empty
{ 
    $login = $_POST['login'];
    $mot_de_passe = $_POST['motdp'];

    if($login === "admin" && $mot_de_passe === "admin") {
        echo "<h2>Vous êtes connecté</h2>";
    } else {
        echo "<h2>Identifiants incorrects. Veuillez réessayer.</h2>";
        echo "<a href='authentification.html'>Retour à la page d'authentification</a>";
    }

}
 //http://127.0.0.1:8080/TP2/Ex1/authentification.php?login=admin&motdp=admin&btn=Submit  ==> donc on observe les coordonnéeds sont visible 

//http://127.0.0.1:8080/TP2/Ex1/authentification.php ==> avec la methode poste ilya une securiter des données

?>