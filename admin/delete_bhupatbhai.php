<?php
  include "../connection.php";
  $id = $_GET['id'];
  $query = "DELETE FROM `bhupatbhai` WHERE id='$id'";
  $data = mysqli_query($conn,$query);
  if ($data) {
    echo "<script> alert('bhupatbhai Is Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_bhupatbhai.php'; </script>";
    exit;
  }
  else {
    echo "<script> alert('bhupatbhai Can't Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_bhupatbhai.php'; </script>";
    exit;
  }
?>
