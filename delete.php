<?php
    include 'crud.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM `curdtable` WHERE id = $id";

   $result =  mysqli_query($conn , $sql);

   if($result){
    echo "success_1"."<br>";
  }
  else{
    echo "not"."<br>";
  }

  header('location:display.php');

?>