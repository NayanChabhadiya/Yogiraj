<?php
  include "../connection.php";
  $id = $_GET['id'];
  $query = "DELETE FROM `maintenancet` WHERE id='$id'";
  $data = mysqli_query($conn,$query);
  if ($data) {
    echo "<script> alert('maintenancet Is Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_maintenancet.php'; </script>";
    exit;
  }
  else {
    echo "<script> alert('maintenancet Can't Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_maintenancet.php'; </script>";
    exit;
  }
?>
