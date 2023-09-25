<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family : Arial, Helvetica, sans-serif;
        }
        thead, #hd {
            background-color : #287dde;
        }

        #fd {
            background-color : #25f555; 
        }

        td {
            background-color : #e1ede4;
            text-align : center;
        }

        #nama {
            text-align : left;
        }

    </style>
</head>
<body>
    <?php
        $mhs1 = ['nim' => '0111111', 'nama' => 'Andi Setyo', 'nilai' =>95];
        $mhs2 = ['nim' => '0111112', 'nama' => 'Rafael', 'nilai' =>80];
        $mhs3 = ['nim' => '0111113', 'nama' => 'Ali Hakim', 'nilai' =>78];
        $mhs4 = ['nim' => '0111114', 'nama' => 'Ari', 'nilai' =>76];
        $mhs5 = ['nim' => '0111115', 'nama' => 'Ani', 'nilai' =>86];
        $mhs6 = ['nim' => '0111116', 'nama' => 'Anji', 'nilai' =>50];
        $mhs7 = ['nim' => '0111117', 'nama' => 'Budi Santoso', 'nilai' =>20];
        $mhs8 = ['nim' => '0111118', 'nama' => 'Chandra', 'nilai' =>30];
        $mhs9 = ['nim' => '0111119', 'nama' => 'Dewi', 'nilai' =>70];
        $mhs10 = ['nim' => '011110', 'nama' => 'Elisa', 'nilai' =>65];

        $judul = ['No', 'NIM', 'Nama Mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
        $mahasiswa  = [$mhs1,$mhs2,$mhs3,$mhs4,$mhs5,$mhs6,$mhs7,$mhs8,$mhs9,$mhs10];


        $nilait = array_column ($mahasiswa,'nilai');
        $jumlahmhs = count($mahasiswa);
        $nilaiKeseluruhan = array_sum ($nilait);
        $nilaiTertinggi = max ($nilait);
        $nilaiTerendah = min ($nilait);
        $nilairatarata = $nilaiKeseluruhan / $jumlahmhs;
        $aggregate = [
            'Nilai Tertinggi' => $nilaiTertinggi,
            'Nilai Terendah' => $nilaiTerendah,
            'Nilai Rata Rata' => $nilairatarata,
            'Jumlah Mahasiswa' => $jumlahmhs,
            'Nilai Keseluruhan' => $nilaiKeseluruhan,
        ];
    ?>

    <h1 align="center">Daftar Nilai Mahasiswa</h1>
    <table border="1" width="100%" cellspacing = 0; cellpadding = 5;>
        <thead>
            <tr>
                <?php 
                 foreach ($judul as $head){ ?>
                    <th><?= $head ?></th>
                <?php }
                 ?>
            </tr>
        </thead>

        <tbody>
            <?php $no =1;
                foreach ($mahasiswa as $mhs){ 
                $ket = $mhs['nilai'] >=60 ? 'Lulus' : 'Gagal';
                $grade = $mhs ['nilai'];
                $predikat = '';


                //keterangan nilai
                if ($grade >90){
                    $grade = 'A';
                } else if ($grade >=80 ){
                    $grade = 'B';
                } else if ($grade >60){
                    $grade = 'C';
                }else if ($grade >=50){
                    $grade = 'D';
                }else {
                    $grade = 'E';
                }

                //predikat
                switch ($grade) {
                    case 'A': $predikat = 'Sangat Baik';
                    break;
                    case 'B' : $predikat = 'Baik';
                    break;
                    case 'C' : $predikat = 'Cukup';
                    break;
                    case 'D' : $predikat = 'Kurang Baik';
                    break;
                    default : $predikat = 'Buruk';
                    break;
                }



                 ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $mhs ['nim'] ?></td>
                            <td id="nama"><?= $mhs ['nama'] ?></td>
                            <td><?= $mhs ['nilai'] ?></td>
                            <td><?= $ket ?></td>
                            <td><?= $grade ?></td>
                            <td><?= $predikat ?></td>
                        </tr>
              <?php  }
            ?>
        </tbody>
        <tfoot>
            <?php 
                foreach ($aggregate as $agg => $hasil){ ?>
                    <tr>
                        <th colspan = "3" id="hd"><?= $agg ?></th>
                        <th colspan="4" id="fd"><?= $hasil ?></th>
                    </tr>
              <?php  }
            ?>
        </tfoot>
    </table>
</body>
</html>