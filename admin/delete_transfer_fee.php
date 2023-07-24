<?php
  include "../connection.php";
  $id = $_GET['id'];
  $query = "DELETE FROM `transfer_fee` WHERE id='$id'";
  $data = mysqli_query($conn,$query);
  if ($data) {
    echo "<script> alert('transfer_fee Is Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_transfer_fee.php'; </script>";
    exit;
  }
  else {
    echo "<script> alert('transfer_fee Can't Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_transfer_fee.php'; </script>";
    exit;
  }
?>
