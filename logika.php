<?php
    // Penulisan array yang lama
    $namaSiswa = array("Elia","Grace","Melpen");
    
    // Penulisa array yang baru
    $nama = ["Elia","Grace","Melpen","Jakson","Delvi","Obed"];

    // var_dump($namaSiswa[0]);

    echo "<br>". $nama[0];
    echo "<br>". $nama[1];
    echo "<br>". $nama[2];

    foreach($nama as $siswa)
    {
        echo "<br>" .$siswa;
    }

    // ARRAY MULTI DEMENSI

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

    // Tampilkan data 
    $i = 0;
    foreach($namaSacode as $nama)
    {
        echo "<br> <br> <br> Siswa No ". ++$i ." <br>";
        echo "Nama : ". $nama["namadepan"]." ".$nama["namabelakang"] ."<br>";
        echo "alamat : ". $nama["alamat"] ."<br>";
        echo "usia : ". $nama["usia"] ."<br>";
    }