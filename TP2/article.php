<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="">référence</label>
    <input type="text"  name="ref">
    <br>
    <label for="">libellé</label>
    <input type="text" pattern="[A-Za-z0-9]+" name="lib" >
    <br>
    <label for="">fournisseur</label>
    <select name="four" id="">
        <option value="">fournisseur1</option>
        <option value="">fournisseur2</option>
        <option value="">fournisseur3</option>
    </select> 
    <br>
    <br>
    <label for="">point de vente </label>
    <br>
    <br>
    <input type="checkbox" id="point de vente" name="point[]"> sfax <br>
    <input type="checkbox" id="point de vente" name="point[]"> tunis <br>
    <input type="checkbox" id="point de vente" name="point[]"> djerba <br>
    <br>
    <label  for="">prix</label>
    <input type="number" name="prix" >
    <br>
    <label for="">Qt en stock</label>
    <input type="number" name="qte">
    <br>
    <input type="submit" value="envoyer">

    </form>

    <?php
    $ref = $_POST["ref"];
    $lib= $_POST["lib"];
    $four=$_POST["four"];
    $point=$_POST["point"];
    $prix=$_POST["prix"];
    $qte=$_POST["qte"];
    ?>
    <h1> les information de l'article </h1>
    
    <?php
    echo " le referece :$ref <br>";
    echo " libele :$lib <br>";
    foreach ($four as $f){
    echo " fournisser : $f <br>";
    }
 foreach($point as $a)
 {
    echo " point de vente: $a <br>";
 }
    echo " prix: $prix <br>";
    echo " quantite: $qte <br>";
   ?>


</body>
</html>