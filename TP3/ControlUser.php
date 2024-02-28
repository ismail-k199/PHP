<?php
include("user.php");
$login=$_POST["login"];
$pass=$_POST["pass"];
$US=new user($login,$pass);
 if  (($US -> connect())==true);
 echo $US;
 ?>