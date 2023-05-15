<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <br>
        <h3 class="text-center">Input Data</h3>

        <a href="index.php"><button type="button" class="btn btn-dark">Kembali ke Home</button></a>
        <br><br>

        <form action="create_process.php" method="post">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <select name="jenis_kelamin" class="form-control">
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                </select>
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input type="number" name="telpon" class="form-control" placeholder="Masukkan Nomor Telepon">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</body>
</html>