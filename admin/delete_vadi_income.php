<?php
  include "../connection.php";
  $id = $_GET['id'];
  $query = "DELETE FROM `vadi_income` WHERE id='$id'";
  $data = mysqli_query($conn,$query);
  if ($data) {
    echo "<script> alert('vadi_income Is Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_vadi_income.php'; </script>";
    exit;
  }
  else {
    echo "<script> alert('vadi_income Can't Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_vadi_income.php'; </script>";
    exit;
  }
?>
