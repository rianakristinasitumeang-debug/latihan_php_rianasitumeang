<!--
fungsi echo bisa menampilkan satu atau lebih variabel teks salam satu
perintah,
dengan dipisah oleh coma (,),
contoh:
-->
<?php
echo "<p>fungsi echo bisa menampilkan satu atau lebih variabel teks dalam satu perintah, dengan dipisah oleh coma (,),</p>";

echo "Contoh 1 </br>";
echo "ini ","adalah ","teks "," terpisah.";
echo "</br></br></br></br>";

// menggunakan titik sebagai pemisah format variabel yang akan dimasukan
echo "contoh 2 </br>";
$teks = "teks terpisah.";
echo "ini "."adalah ".$teks;

   echo "<h1> aku Bangga Belajar PHP di Politeknik Bisnis indonesia</h1>";
   echo "1" + "1"; //hasilnya akan  menjadi 2
   echo "2" - "1"; //hasilnya akan menjadi 1
   echo "2" * "2"; //hasilnya akan menjadi 4
   echo "2" / "2"; //hasilnya akan menjadi 1
   echo "1" . "1"; //hasilnya akan menjadi 11
?>

<!-- kesimpulan
 Dari tiga cara menampilkan teks diatas, yang paling sering digunakan adalah echo
 karena fungsinya yang lebih reliable dan dapat digunakan dalam segala kondisi
 serta dapat digunakan untuk penghitungan matematika

 selain itu, printf terkadang digunakan untuk lebih memudahkan penggantian format teks
 dari sebuah variable, tanpa harus parsaing (penyesuaian format) terlebih dahulu. -->