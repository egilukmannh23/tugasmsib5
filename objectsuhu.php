<?php
    require 'suhu.php';

    //celcius to fahrenheit
    $s1 = new suhu ('celcius' , 20 , 'fahrenheit');
    $s2 = new suhu ('celcius' , 40 , 'fahrenheit');
    //fahrenheit to celcius
    $s3 = new suhu ('fahrenheit' , 104 , 'celcius');
    $s4 = new suhu ('fahrenheit' , 68 , 'celcius');
    //celcius to rheamur
    $s5 = new suhu ('celcius' , 70 , 'rheamur');
    $s6 = new suhu ('celcius' , 50 , 'rheamur');
    //rheamur to celcius
    $s7 = new suhu ('rheamur' , 56 , 'celcius');
    $s8 = new suhu ('rheamur' , 40 , 'celcius');
    
    echo '<table border ="1" cellspacing="0" cellpadding="5">';
    echo '<tr>';
    echo '<th> Satuan Suhu Awal </th>';
    echo '<th> Besaran Suhu </th>';
    echo '<th> Satuan Suhu Tujuan </th>';
    echo '<th> Hasil Konversi Suhu </th>';
    echo '</tr>';
    $s1->cetak();
    $s2->cetak();
    $s3->cetak();
    $s4->cetak();
    $s5->cetak();
    $s6->cetak();
    $s7->cetak();
    $s8->cetak();
    echo '</table>';
?>