<?php

require_once "../auto/config-2.php";

$code_dep = $_POST['code_dep'];
$code = $_POST['code'];
$nom = $_POST['nom'];

if(!empty($code_dep) && !empty($code) && !empty($nom)){

    $req="INSERT INTO `filiere` (`id_filiere`, `nom_filiere`, `id_depart`) VALUES ('$code', '$nom', '$code_dep')";
    $result=mysqli_query($con,$req);

    header("location: admin.php");
} else {
    echo "L'ajout a echoue !".mysqli_error($con);
}

?>