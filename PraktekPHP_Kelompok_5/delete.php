<?php
    include('conn.php');

    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM pelanggan WHERE id = '$id' ");
   
    header("Location: index.php");
?>