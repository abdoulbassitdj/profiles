<?php

require_once "../auto/config-2.php";

$uname=$_POST['login'];
$pass=$_POST['pass'];

$req="SELECT * FROM `etudiant` WHERE login = '$uname' AND pass = '$pass'";
$result=mysqli_query($con,$req);

if (mysqli_num_rows($result)>0) {

    $r=mysqli_fetch_array($result);

    session_id("E".$r['matricule']);

    session_start();

    $_SESSION['id'] = $r['matricule'];
    $_SESSION['nom'] = $r['nom'];
    $_SESSION['prenom'] = $r['prenom'];
    $_SESSION['date'] = $r['date_naissance'];
    $_SESSION['lieu'] = $r['lieu_naissance'];
    $_SESSION['sexe'] = $r['genre'];
    $_SESSION['cycle'] = $r['cycle'];
    $_SESSION['niveau'] = $r['niveau'];
    $_SESSION['nationalite'] = $r['nationalite'];
    $_SESSION['email'] = $r['email'];
    $_SESSION['photo'] = $r['photo'];
    $_SESSION['login'] = $r['login'];
    $_SESSION['pass'] = $r['pass'];
    $_SESSION['id_tuteur'] = $r['id_tuteur'];
    $_SESSION['id_filiere'] = $r['id_filiere'];
    $_SESSION['ville'] = $r['ville'];
    $_SESSION['quartier'] = $r['quartier'];
    $_SESSION['residence'] = $r['residence'];
    $_SESSION['tel'] = $r['tel'];
    $_SESSION['fixe'] = $r['fixe'];
    

    header("location:etudiant.php");
}

?>