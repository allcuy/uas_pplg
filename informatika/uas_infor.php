<?php
    function senin($kalori,$senin){
        $hasil = $senin;
        return $hasil;
    }

    function selasa($kalori,$selasa){
        $hasil = $selasa;
        return $hasil;
    }

    function rabu($kalori,$rabu){
        $hasil = $rabu;
        return $hasil;
    }

    function kamis($kalori,$kamis){
        $hasil = $kamis;
        return $hasil;
    }

    function jumat($kalori,$jumat){
        $hasil = $jumat;
        return $hasil;
    }

    function sabtu($kalori,$sabtu){
        $hasil = $sabtu;
        return $hasil;
    }

    function minggu($kalori,$minggu){
        $hasil = $minggu;
        return $hasil;
    }

    $senin = kalori_senin(2500,3);
    $selasa = kalori_selasa(2500,2);
    $rabu = kalori_rabu(2500,2);
    $kamis = kalori_kamis(2500,3);
    $jumat = kalori_jumat(2500,3);
    $sabtu = kalori_sabtu(2500,2);
    $minggu = kalori_minggu(2500,1);
    $jam = 42;
    $kaloriseminggu = 4000;

    echo "kalori hari senin = $senin </br>";
    echo "kalori hari selasa = $selasa </br>";
    echo "kalori hari rabu = $rabu </br>";
    echo "kalori hari kamis = $kamis </br>";
    echo "kalori hari jumat = $jumat </br>";
    echo "kalori hari sabtu = $sabtu </br>";
    echo "kalori hari minggu = $minggu </br>";
    echo "total : ", $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;
// kalori
    echo "</br>";
    echo "</br>";
// isti
    function tidur_senin($senin){
        $hasil = $senin;
        return $hasil;
    }

    function tidur_selasa($selasa){
        $hasil = $selasa;
        return $hasil;
    }

    function tidur_rabu($rabu){
        $hasil = $rabu;
        return $hasil;
    }


    function tidur_kamis($kamis){
        $hasil = $kamkis;
        return $hasil;
    }

    function tidur_jumat($jumat){
        $hasil = $jumat;
        return $hasil;
    }

    function tidur_sabtu($sabtu){
        $hasil = $sabtu;
        return $hasil;
    }

    function tidur_minggu($minggu){
        $hasil = $minggu;
        return $hasil;
    }

    $senin = tidur_senin(5);
    $selasa = tidur_selasa(6);
    $rabu = tidur_rabu(8);
    $kamis = tidur_kamis(8);
    $jumat = tidur_jumat(5);
    $sabtu = tidur_sabtu(6);
    $minggu = tidur_minggu(4);

    echo "tidur_senin = $senin </br>";
    echo "tidur_selasa = $selasa </br>";
    echo "tidur_rabu = $rabu </br>";
    echo "tidur_kamis = $kamis </br>";
    echo "tidur_jumat = $jumat </br>";
    echo "tidur_sabtu = $sabtu </br>";
    echo "tidur_minggu = $minggu </br>";
//mandek
        echo "</br>";
        echo "</br>";
//menghitung
    if($kaloriseminggu >= 17500 && $jam > 56) {
        echo "kamu sembuh";
    }
    else {
        echo "kamu masih sakit";
    }
?>
