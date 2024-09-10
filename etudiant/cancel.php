<?php

require_once "../auto/config.php";

$id=$_GET['id'];

$req="UPDATE booking SET status = 'fini' WHERE id = $id";
$result=mysqli_query($con,$req);

if ($result) {
    echo "UPDATED";
    header("location: etudiant.php");
}

?>