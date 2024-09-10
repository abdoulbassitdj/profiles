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

    if(count($_POST['tranche']) == 2){
        $tranche = "totalite";
    } else{
        $tranche = $_POST['tranche'][0];
    }

    $montant=$_POST['montant'];
    $date=date("Y-m-d");
    $matricule=$_POST['matricule'];
   
    $req="INSERT INTO `payement` (`tranche`, `montant`, `date_paye`, `matricule_etu`) VALUES ('$tranche', '$montant', '$date', '$matricule')";
    $result=mysqli_query($con,$req);

    if($result){

        header("location:etudiant.php");

    } else {

        echo "<br>echec".mysqli_error($con);

    }

}


?>