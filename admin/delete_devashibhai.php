<?php
  include "../connection.php";
  $id = $_GET['id'];
  $query = "DELETE FROM `devashibhai` WHERE id='$id'";
  $data = mysqli_query($conn,$query);
  if ($data) {
    echo "<script> alert('devashibhai Is Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_devashibhai.php'; </script>";
    exit;
  }
  else {
    echo "<script> alert('devashibhai Can't Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_devashibhai.php'; </script>";
    exit;
  }
?>
