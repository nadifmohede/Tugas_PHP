<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
        <br>
        <h3 class="text-center">Input Data</h3>

        <a href="index.php"><button type="button" class="btn btn-dark">Kembali ke Home</button></a>
        <br><br>

        <form id="tambah-data" action="create_process.php" method="post">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" id="input-nama" class="form-control" placeholder="Masukkan Nama">
                <p id="text-error-nama"></p>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <select name="jenis_kelamin" id="input-jenis-kelamin" class="form-control">
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                </select>
                <p id="text-error-jenis-kelamin"></p>
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input type="number" name="telpon" id="input-telpon" class="form-control" placeholder="Masukkan Nomor Telepon">
                <p id="text-error-telpon"></p>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" id="input-alamat" class="form-control" placeholder="Masukkan Alamat">
                <p id="text-error-alamat"></p>
            </div>
            <div class="form-group">
                <button type="button" id="my-button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</body>

<script type="text/javascript">
	$('#my-button').click(function() {
		var isValid = true;

		if ($('#input-nama').val().length === 0) {
			$('#input-nama').css({"background-color": "#ff00002b"});
			$('#text-error-nama').text('Silahkan isi nama terlebih dahulu');
			isValid = false;
		} else {
			$('#input-nama').css({"background-color": ""});
			$('#text-error-name').text('');
		}

		if ($('#input-jenis-kelamin').val().length === 0) {
			$('#input-jenis-kelamin').css({"background-color": "#ff00002b"});
			$('#text-error-jenis-kelamin').text('Silahkan pilih jenis kelamin');
			isValid = false;
		} else {
			$('#input-jenis-kelamin').css({"background-color": ""});
			$('#text-error-jenis-kelamin').text('');
		}

		if ($('#input-telpon').val().length === 0) {
			$('#input-telpon').css({"background-color": "#ff00002b"});
			$('#text-error-telpon').text('Silahkan isi telepon terlebih dahulu');
			isValid = false;
		} else {
			$('#input-telepon').css({"background-color": ""});
			$('#text-error-telepon').text('');
		}

		if ($('#input-alamat').val().length === 0) {
			$('#input-alamat').css({"background-color": "#ff00002b"});
			$('#text-error-alamat').text('Silahkan isi alamat terlebih dahulu');
			isValid = false;
		} else {
			$('#input-alamat').css({"background-color": ""});
			$('#text-error-alamat').text('');
		}

		if (isValid) {
			$('#tambah-data').submit();
		}
	});
</script>
</html>