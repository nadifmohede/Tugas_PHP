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
    <form action="process.php" method="post">
        <table cellpadding="10" cellspacing="0" class="table table-striped">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin" id="">
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="number" name="telpon"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="Submit" name="Submit" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
</body>
</html>