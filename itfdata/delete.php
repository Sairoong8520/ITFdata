<?php

$conn = mysqli_init();
mysqli_real_connect($conn, '103.91.205.130', 'roong.pimmada', '^49M6v@FS/TuGR,r', 'roong.pimmada', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$id = $_GET['id'];


$sql = "DELETE FROM guestbook WHERE id='$id'";


if (mysqli_query($conn, $sql)) {
    echo "Delete record successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
