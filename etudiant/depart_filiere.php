<?php

    require_once "../auto/config-2.php";

    $req="SELECT * FROM `etudiant` WHERE login = '$uname' AND pass = '$pass'";
    $result=mysqli_query($con,$req);

    if (mysqli_num_rows($result)>0) {

        $r=mysqli_fetch_array($result);
    }

?>