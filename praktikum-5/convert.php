<?php
$nama = $_POST['nama'];
$nilaiAngka = $_POST['nilaiAngka'];
$nilaiHuruf = '-';
$predikat = '-';
$color = 'text-success';

$flag = false;
if (!ctype_alpha($nama)) {
    echo '<div class="fw-bold text-danger">Nama hanya boleh berisi alfabet!</div>';
    $flag = true;
}
if (!is_numeric($nilaiAngka)) {
    echo '<div class="fw-bold text-danger">Nilai hanya boleh berisi angka!</div>';
    $flag = true;
}

if ($flag) return;

if ($nilaiAngka >= 81 && $nilaiAngka <= 100) {
    $nilaiHuruf = 'A';
    $predikat = 'Excellent';
} else if ($nilaiAngka >= 71 && $nilaiAngka <= 80) {
    $nilaiHuruf = 'AB';
    $predikat = 'Nice';
}
else if ($nilaiAngka >= 66 && $nilaiAngka <= 70) {
    $nilaiHuruf = 'B';
    $predikat = 'Very good';
}
else if ($nilaiAngka >= 60 && $nilaiAngka <= 65) {
    $nilaiHuruf = 'BC';
    $predikat = 'Good';
}
else if ($nilaiAngka >= 56 && $nilaiAngka <= 60) {
    $nilaiHuruf = 'C';
    $predikat = 'Not bad';
    $color = 'text-danger';
}
else if ($nilaiAngka >= 41 && $nilaiAngka <= 55) {
    $nilaiHuruf = 'D';
    $predikat = 'Bad';
    $color = 'text-danger';
}
else if ($nilaiAngka >= 0 && $nilaiAngka <= 40) {
    $nilaiHuruf = 'E';
    $predikat = 'Poor';
    $color = 'text-danger';
}
else {
    $nilaiHuruf = 'Not in range';
    $predikat = 'Not in range';
    $color = 'text-primary';
}

echo '<div class="fw-bold">Nama: ' . $nama. '</div>';
echo '<div class="fw-bold">Nilai Huruf: ' . '<span class="'.$color.'">'.$nilaiHuruf.'</span>' . '</div>';
echo '<div class="fw-bold">Predikat: ' . '<span class="'.$color.'">'.$predikat.'</span>' . '</div>';
