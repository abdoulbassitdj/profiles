<?php

require_once "../auto/config-2.php";

$code = $_POST['code'];
$nom = $_POST['nom'];
$admin = $_POST['admin'];

if(!empty($code) && !empty($nom) && !empty($admin)){

    $req="INSERT INTO `departement` (`code_dpt`, `nom_dpt`, `id_admin`) VALUES ('$code', '$nom', '$admin')";
    $result=mysqli_query($con,$req);

    header("location: admin.php");
} else {
    echo "L'ajout a echoue !".mysqli_error($con);
}



// echo $nom." ".$matricule." ".$qualif;

?>