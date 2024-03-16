<?php
   require_once "connection.php";
   if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $query=$conn->query("DELETE FROM stock WHERE productId=$id");
   }
   if ($query) {
 echo "<script>window.location.replace('admin.php?remove=remove');</script>";
   }
?>