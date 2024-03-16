<?php
include 'connection.php';
if (isset($_GET['pId'])) {
    $pId=$_GET['pId'];
    $remove=$conn->query("DELETE FROM stock WHERE pId='$pId'");
    if ($remove) {
        header("location:admin.php");
    }
    else {
        echo "<script>alert('error');</script>";
    }
}
?>