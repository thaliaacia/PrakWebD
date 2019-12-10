<?php
$data1 = [
    ["namaSales" => "Raviti",
        "masaKerja" => 3,
        "nilaiPenjualan" => 6323000,
    ],
    ["namaSales" => "Woosa",
        "masaKerja" => 1,
        "nilaiPenjualan" => 3250000
    ],
    ["namaSales" => "Garo",
        "masaKerja" => 2,
        "nilaiPenjualan" => 2750000,
    ],
    ["namaSales" => "Iris",
        "masaKerja" => 5,
        "nilaiPenjualan" => 4500000
    ],
];
$data2 = [
    [
        "Nilaipenjualan" => "-",
        "MasaKerja3th" => "1.50%",
        "MasaKerjaAtas3th" => "2.00%"
    ],
    [
        "Nilaipenjualan" => "Rp. 1.000.000",
        "MasaKerja3th" => "2.00%",
        "MasaKerjaAtas3th" => "2.50%"
    ],
    [
        "Nilaipenjualan" => "Rp. 2.000.000",
        "MasaKerja3th" => "2.50%",
        "MasaKerjaAtas3th" => "3.00%"
    ],
    [
        "Nilaipenjualan" => "Rp. 3.000.000",
        "MasaKerja3th" => "3.00%",
        "MasaKerjaAtas3th" => "3.50%"
    ],
    [
        "Nilaipenjualan" => "Rp. 4.000.000",
        "MasaKerja3th" => "3.50%",
        "MasaKerjaAtas3th" => "4.00%"
    ],
]
?>

<html>
<head>
    <title>Document</title>
</head>
<body>
<div>
    <table border="1">
        <thead>
        <tr style="background-color: darkseagreen">
            <th>Nama Sales</th>
            <th>Masa kerja</th>
            <th>Nilai Penjualan</th>
            <th>Persentase Komisi</th>
            <th>Jumlah Komisi</th>
        </tr>
        </thead>
        <?php
        foreach ($data1 as $dt): ?>
            <tbody>
            <tr>
                <?php
                if ($dt["nilaiPenjualan"] > 0 && $dt["nilaiPenjualan"]<=1000000 ){
                    if ($dt["masaKerja"]>0 && $dt["masaKerja"] < 3 ){
                        echo "MASUKKKK";
                        $dt["persentaseKomisi"] = 1.2;
                    }else{
                        $dt["persentaseKomisi"]=2;
                    }
                }elseif ($dt["nilaiPenjualan"] > 1000000 && $dt["nilaiPenjualan"]<=2000000){
                    if ($dt["masaKerja"]>0 && $dt["masaKerja"] < 3){
                        $dt["persentaseKomisi"] = 2;
                    }else{
                        $dt["persentaseKomisi"] = 2.5;
                    }
                }elseif ($dt["nilaiPenjualan"] > 2000000 && $dt["nilaiPenjualan"]<=3000000){
                    if ($dt["masaKerja"]>0 && $dt["masaKerja"] < 3){
                        $dt["persentaseKomisi"] = 2.5;
                    }else{
                        $dt["persentaseKomisi"] = 3;
                    }
                }elseif ($dt["nilaiPenjualan"] > 3000000 && $dt["nilaiPenjualan"]<4000000){
                    if ($dt["masaKerja"]>0 && $dt["masaKerja"] < 3){
                        $dt["persentaseKomisi"] = 3;
                    }else{
                        $dt["persentaseKomisi"] = 3.5;
                    }
                }elseif ($dt["nilaiPenjualan"] > 4000000){
                    if ($dt["masaKerja"]>0 && $dt["masaKerja"] < 3){
                        $dt["persentaseKomisi"] = 3.5;
                    }else{
                        $dt["persentaseKomisi"] = 4;
                    }
                }
                $dt["jumlah"] = ($dt["persentaseKomisi"]/100 )*$dt["nilaiPenjualan"]
                ?>
                <td><?php echo $dt["namaSales"]; ?></td>
                <td><?php echo $dt["masaKerja"]; ?></td>
                <td><?php echo $dt["nilaiPenjualan"]; ?></td>
                <td><?php echo $dt["persentaseKomisi"]; ?>%</td>
                <td><?php echo $dt["jumlah"]; ?></td>
            </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
    <br>
    <table border="1">
        <thead>
        <tr style="background-color: darkseagreen">
            <th rowspan="2" class="text-center">Nilai Penjualan</th>
            <th colspan="2" class="text-center">Persentasi Komisi</th>
        </tr>
        <tr style="background-color: darkseagreen">
            <th>Masa Kerja Hingga 3thn</th>
            <th>Masa Kerja Di Atas 3thn</th>
        </tr>
        </thead>
        <?php foreach ($data2 as $dt2): ?>
            <tbody>
            <tr>
                <td class="text-center"><?php echo $dt2["Nilaipenjualan"] ?></td>
                <td class="text-center"><?php echo $dt2["MasaKerja3th"] ?></td>
                <td class="text-center"><?php echo $dt2["MasaKerjaAtas3th"] ?></td>
            </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>