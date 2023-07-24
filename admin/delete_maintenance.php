<?php
  include "../connection.php";
  $id = $_GET['id'];
  $query = "DELETE FROM `maintenance` WHERE id='$id'";
  $data = mysqli_query($conn,$query);
  if ($data) {
    echo "<script> alert('maintenance Is Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_maintenance.php'; </script>";
    exit;
  }
  else {
    echo "<script> alert('maintenance Can't Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_maintenance.php'; </script>";
    exit;
  }
?>
