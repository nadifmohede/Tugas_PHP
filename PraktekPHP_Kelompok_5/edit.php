<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <?php
    include('conn.php');
    $id = $_GET['id'];

    $data_pelanggan =mysqli_query($conn, "SELECT * FROM pelanggan WHERE id = '$id' ");

    while($pelanggan = mysqli_fetch_array($data_pelanggan)){
        $nama = $pelanggan['nama'];
        $jenis_kelamin = $pelanggan['jenis_kelamin'];
        $telpon = $pelanggan['telpon'];
        $alamat = $pelanggan['alamat'];
    }

    ?>

    <div class="container">
        <br>
        <h3 class="text-center">Edit Data</h3>

        <a href="index.php"><button type="button" class="btn btn-dark">Kembali ke Home</button></a>
        <br><br>

        <form action="edit_process.php?id=<?php echo $pelanggan['id']; ?>" method="post">
            <div class="form-group">
                <label>Nama</label>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <select name="jenis_kelamin" class="form-control">
                    <option value="pria" <?= ($jenis_kelamin == 'pria' ? 'selected' : ''); ?> >Pria</option>
                    <option value="wanita" <?= ($jenis_kelamin == 'wanita' ? 'selected' : ''); ?> >Wanita</option>
                </select>
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input type="number" name="telpon" value="<?php echo $telpon; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" value="<?php echo $alamat; ?>" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>