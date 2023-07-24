<?php
  include "../connection.php";
  $id = $_GET['id'];
  $query = "DELETE FROM `upad` WHERE id='$id'";
  $data = mysqli_query($conn,$query);
  if ($data) {
    echo "<script> alert('upad Is Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_upad.php'; </script>";
    exit;
  }
  else {
    echo "<script> alert('upad Can't Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_upad.php'; </script>";
    exit;
  }
?>
