<?php
// 1. Data disimpan di dalam variabel
$nama = "Riana Kristina Situmeang";
$kelas = "RK 5";
$jurusan = "Komputerisasi Akuntansi";
$umur = 27;
$nilai = 82;

// Bonus : Menentukan status berdasarkan nilai
if ($nilai >= 75) {
    $status = "LULUS"; 
} else {
    $status = "TIDAK LULUS";
}

//2. Output program dengan tanda ====
echo "==================================<br>";
echo "    KARTU PROFIL SISWA            <br>";
echo "==================================<br>";

//Echo ke-2 & menggunakan operator titik (.) untuk menggunakan variabel
echo  "Nama : " . $nama . "<br>";
echo  "Kelas : " . $kelas . "<br>";

//printf ke-1 & menggunakan placeholder %s untuk string
printf("jurusan : %s<br>", $jurusan);

//printf ke-2 & menggunakan placeholder %d untuk angka serta ada 'tahun'
printf("umur : %d tahun<br>", $umur);

//menampilkan nilai dan status bonus
echo "nilai : " . $nilai . "<br>";
echo "status : " . $status . "<br>";
echo "================================<br>";
?>
