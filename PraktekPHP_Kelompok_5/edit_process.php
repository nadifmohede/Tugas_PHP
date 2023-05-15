<?php
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];

    include('conn.php');
    
    $result = mysqli_query($conn, "UPDATE pelanggan SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', telpon = '$telpon', alamat = '$alamat' WHERE id = '$id'; ");
    
    header("location:index.php");
?>