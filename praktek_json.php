<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktek JSON</title>
</head>
<style>
    body{
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .content{
        padding-top: 50px;
    }
    table, tr, td{
        border: 1px solid black;
        text-align: center;
        border-collapse: collapse;
    }
    header{
        padding: 20px;
        background-color: #d49a13;
        color: white;
    }
</style>
<body>

<header>
    <nav>
        <h3>Daftar Nilai</h3>
    </nav>
</header>

<div class="content">
    <center>
        <table cellpadding="5" cellspacing="5">
            <tr style="font-weight: bold;">
                <td>No.</td>
                <td>Nama</td>
                <td>Tanggal Lahir</td>
                <td>Umur</td>
                <td>Alamat</td>
                <td>Kelas</td>
                <td>Nilai</td>
                <td>Hasil</td>
            </tr>

            <?php 
                $no = 1;

                $json_string = file_get_contents('data.json');
                $json = json_decode($json_string, true);

                

                foreach($json as $data){
                    $lahir = new DateTime($data["tanggal_lahir"]);
                    $today = new DateTime();
                    $umur = $today->diff($lahir);

                    
            ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["tanggal_lahir"]; ?></td>
                <td><?php echo $umur->y; ?></td>
                <td><?php echo $data["alamat"]; ?></td>
                <td><?php echo $data["kelas"]; ?></td>
                <td><?php echo $data["nilai"]; ?></td>
                <td>
                    <?php
                        switch($data["nilai"]){
                            case ($data["nilai"] >= 90 && $data["nilai"] <= 100):
                                echo "A";
                                break;
                            case ($data["nilai"] >= 80 && $data["nilai"] < 90):
                                echo "B";
                                break;
                            case ($data["nilai"] >= 70 && $data["nilai"] < 80):
                                echo "C";
                                break;
                            case ($data["nilai"] && $data["nilai"] < 70):
                                echo "D";
                                break;
                            default:
                                echo "-";
                                break;
                        }
                    ?>
                </td>
            </tr>

            <?php
                }
            ?>
        </table>
    </center>
</div>

</body>
</html>