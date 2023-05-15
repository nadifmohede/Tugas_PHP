<!DOCTYPE html>
<html lang="en">
<head>
    <title>Penjualan</title>
    <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        
        <br>
        <h3 class="text-center">Tabel Pelanggan</h3>

        <br>
        <a href="create.php" class="btn btn-primary">Tambah Data</a><br><br>

        <table cellpadding="10" cellspacing="0" class="table table-striped">
            <tr class="font-weight-bold">
                <td width="50px" class="text-center">No</td>
                <td width="200px" class="text-center">Nama</td>
                <td width="200px" class="text-center">Jenis Kelamin</td>
                <td width="200px" class="text-center">Telepon</td>
                <td width="200px" class="text-center">Alamat</td>
                <td width="200px" class="text-center">Aksi</td>
            </tr>

            <?php
                include('conn.php');

                $nomor = 1;

                $data_pelanggan = mysqli_query($conn, "SELECT * FROM pelanggan ORDER BY id DESC");

                while($pelanggan = mysqli_fetch_array($data_pelanggan)){
            ?>
            <tr>
                <td class="text-center"><?php echo $nomor++ ?></td>
                <td class="text-center"><?php echo $pelanggan['nama'] ?></td>
                <td class="text-center"><?php echo $pelanggan['jenis_kelamin'] ?></td>
                <td class="text-center"><?php echo $pelanggan['telpon'] ?></td>
                <td class="text-center"><?php echo $pelanggan['alamat'] ?></td>
                <td class="text-center">
                    <a href="edit.php?id=<?php echo $pelanggan['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="delete.php?id=<?php echo $pelanggan['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>