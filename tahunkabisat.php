<?php 

$tahun = 1996;
if ($tahun % 4 == 0 && $tahun % 100 !=0 || $tahun % 400 == 0) {
    echo "Tahun $tahun adalah Tahun Kabisat";
} else {
    echo "Tahun $tahun bukan Tahun Kabisat";
}
