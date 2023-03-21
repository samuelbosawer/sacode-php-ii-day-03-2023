<?php

    $namaSiswa = ['Elia','Obed',"Aldhy",'Delvi','Paul','Melpen'];

    $namaSacode =[
        [
            "namadepan" => "Jakson",
            "namabelakang" => "Tabuni",
            "usia" => "30",
            "alamat" => "Doyo Kab. Sentani"
        ],
        [
            "namadepan" => "Sam",
            "namabelakang" => "Tabuni",
            "usia" => "30",
            "alamat" => "Doyo Kab. Sentani"
        ],
        [
            "namadepan" => "Obed",
            "namabelakang" => "Nauw",
            "usia" => "30",
            "alamat" => "Doyo Kab. Sentani"
        ]
    ];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan data dari Array</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body{
            background-color: #FFDEB9;
            color : black;
            font-family : impact;
        }
        table, tr, td, th{
           border : 1px solid black; 
        }
        table{
            width:100%;
        }
        th{
            background-color : blue;
        }
    </style>
</head>
<body>
    <h3>Data Siswa</h3>
    <table class="table-auto border border-solid">
        <tr class="border-solid">
            <td>No</td>
            <td>Nama</td>
        </tr>
        <?php $i=0; foreach($namaSiswa as $siswa) : ?>
        <tr class="border-solid">
            <td class=""><?php echo ++$i ?></td>
            <td><?php echo $siswa?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <br><br><br>
    <h3>Data Lengkap Siswa</h3>
    <table>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Usia</th>
            </tr>
            <?php $i=0; foreach($namaSacode as $siswa)  : ?>
                <tr>
                    <td><?= ++$i ?></td>
                    <td><?= $siswa['namadepan']?> <?=$siswa['namabelakang']?></td>
                    <td><?= $siswa['alamat']?></td>
                    <td><?= $siswa['usia']?></td>
                </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>