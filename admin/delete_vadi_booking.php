<?php
  include "../connection.php";
  $id = $_GET['id'];
  $query = "DELETE FROM `vadi_booking` WHERE id='$id'";
  $data = mysqli_query($conn,$query);
  if ($data) {
    echo "<script> alert('vadi_booking Is Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_vadi_booking.php'; </script>";
    exit;
  }
  else {
    echo "<script> alert('vadi_booking Can't Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_vadi_booking.php'; </script>";
    exit;
  }
?>
