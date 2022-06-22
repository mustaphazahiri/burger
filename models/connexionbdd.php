<?php
// session_start();
$host='localhost';
$dbName= "burger";
$user ='root';
$mdp = '';
$charset = 'UTF8';

try{
     $bdd = new PDO ("mysql:host=$host;dbname=$dbName;charset=$charset",$user,$mdp);
}
catch(PDOException $fall){
echo 'Erreur : ',$fall->getMessage();
die();
}
