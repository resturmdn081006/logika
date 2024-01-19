<?php

$jumlahPeserta = 121;
$namaPerwakilan = "Eko";
$kategorieMataLomba = "01w";
$tingkatPendidikan = "A";
$tahunPelaksanaan = date("y");

$nomorPesertaEko = $jumlahPeserta + 1;

$nomorPesertaEkoFormatted = sprintf('%03d%s%s%s', $nomorPesertaEko, $kategorieMataLomba, $tingkatPendidikan, $tahunPelaksanaan);

echo "$namaPerwakilan mendapatkan nomor peserta: $nomorPesertaEkoFormatted";

?>
