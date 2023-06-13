<?php
// Array
$angka = array(15, 25, 30, 40, 50);

// Perulangan menggunakan foreach
foreach ($angka as $nilai) {
    // Percabangan menggunakan if-else
    if ($nilai % 2 == 0) {
        echo $nilai . " adalah angka genap.<br>";
    } else {
        echo $nilai . " adalah angka ganjil.<br>";
    }
}
?>
