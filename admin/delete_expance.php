<?php
  include "../connection.php";
  $id = $_GET['id'];
  $query = "DELETE FROM `expance` WHERE id='$id'";
  $data = mysqli_query($conn,$query);
  if ($data) {
    echo "<script> alert('expance Is Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_expance.php'; </script>";
    exit;
  }
  else {
    echo "<script> alert('expance Can't Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_expance.php'; </script>";
    exit;
  }
?>
