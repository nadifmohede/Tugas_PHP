<!DOCTYPE html>
<html lang="en">
<head>
    <title>Penjualan</title>
    <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>
<body>
    <div class="container">
        
        <br>
        <h3 class="text-center">Tabel Pelanggan</h3>

        <br>
        <a href="create.php" class="btn btn-primary">Tambah Data</a><br><br>

        <table id="myTable" cellpadding="10" cellspacing="0" class="table table-striped">
            <thead>
            <tr class="font-weight-bold">
                <td width="50px" class="text-center">No</td>
                <td width="200px" class="text-center">Nama</td>
                <td width="200px" class="text-center">Jenis Kelamin</td>
                <td width="200px" class="text-center">Telepon</td>
                <td width="200px" class="text-center">Alamat</td>
                <td width="200px" class="text-center">Aksi</td>
            </tr>
            </thead>

            <?php
                include('conn.php');

                $nomor = 1;

                $data_pelanggan = mysqli_query($conn, "SELECT * FROM pelanggan ORDER BY id DESC");

                while($pelanggan = mysqli_fetch_array($data_pelanggan)){
            ?>

            <tbody>
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
            </tbody>
            <?php
                }
            ?>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>
</html>