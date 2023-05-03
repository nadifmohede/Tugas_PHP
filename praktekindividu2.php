<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktek Individu 2</title>
    <style>
        th{
            background-color: skyblue;
        }
    </style>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="2">
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>KELAS</th>
			</tr>

		<?php  for ($no = 1, $nama=1, $kls=10; $nama <= 10, $kls >= 1; $nama++, $kls--) {
            

            if($no % 2 == 0) $warnabg = "#fff";
            else $warnabg = "#ccc";
           
			echo "<tr bgcolor = '".$warnabg."' >";
            echo "<td>" . $no ."</td>";
            echo "<td>" . "Nama ke " . $nama . "</td>";
            echo "<td>" . "Kelas " . $kls . "</td>";
			echo "</tr>";
        ?>

		<?php $no++; } ?>


	</table>
</body>
</html>