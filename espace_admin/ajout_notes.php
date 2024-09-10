<?php

require_once "../auto/config-2.php";

foreach($_POST as $key => $val){

    if(empty($_POST[$key])){
        echo "<div>Remplissez le champ $key </div>";
        $full = FALSE;
    } else {
        $full = TRUE;
    }
}

if($full){

    $matricule=$_GET['matri'];
    $ue=$_POST['ue'];
    $note=$_POST['note'];
    $credit=$_POST['credit'];

    echo $credit;

    $req="INSERT INTO `note` (`id_etudiant`, `ue`, `nbr_credit`, `note`) VALUES ('$matricule', '$ue', '$credit', '$note')";
    $result=mysqli_query($con,$req);

    if($result){

        header("location:admin.php");

    } else {

        echo "<br>echec".mysqli_error($con);

    }
}


?>