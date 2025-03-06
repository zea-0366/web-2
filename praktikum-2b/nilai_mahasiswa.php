<?php
$proses = $_POST["proses"];
$nama_siswa = $_POST["nama"];
$mata_kuliah = $_POST["nilai_uts"];
$nilai_uts = $_POST["nilai_uts"];
$nilai_uas = $_POST["nilai_uas"];
$nilai_tugas = $_POST["nilai_tugas"];

/* MENETUKAN LULUS ATAU TIDAK MENGGUNAKAN IF ELSE 
SISWA DINYATAKAN LULUS JIKA NILAI TOTAL dengan presentase 30% UTS, 35% UAS, dan TUGAS 35% melebihi 55 */
$nilai_total = (0.3 * $nilai_uts) + (0.35 * $nilai_uas) + (0.35 * $nilai_tugas);

if ($nilai_total > 55) {
  $keterangan = "Lulus";
} else {
  $keterangan = "Tidak Lulus";
}

/* MENENTUKAN GRADE NILAI MENGGUNAKAN IF ELSE
0-35 = E
36-55 = D
56-69 = C
70-84 = B
85-100 = A
<0 || > 100 = I*/
$nilai_ = $_POST["nilai"]; // Nilai diambil dari input form

// Menentukan grade berdasarkan nilai
if ($nilai >= 0 && $nilai <= 35) {
    $grade = "E";
} elseif ($nilai >= 36 && $nilai <= 55) {
    $grade = "D";
} elseif ($nilai >= 56 && $nilai <= 69) {
    $grade = "C";
} elseif ($nilai >= 70 && $nilai <= 84) {
    $grade = "B";
} elseif ($nilai >= 85 && $nilai <= 100) {
    $grade = "A";
} else {
    $grade = "I"; // Invalid nilai
}

// Menampilkan hasil
echo "Nilai: " . $nilai . "<br/>";
echo "Grade: " . $grade . "<br/>";
 

/* MENENTUKAN PREDIKAT NILAI MENGGUNAKAN SWITCH
E = Sangat Kurang
D = Kurang
C = Cukup
B= Memuaskan 
A = Sangat Memuaskan
I = Tidak ada*/

if (!empty($proses)) {
  echo "Proses : ", $proses;
  echo "<br/>Nama : " . $nama_siswa;
  echo "<br/>Mata Kuliah : " . $mata_kuliah;
  echo "<br/>Nilai UTS : ". $nilai_uts;
  echo "<br/>Nilai UAS : " . $nilai_uas;
  echo "<br/>Nilai Tugas Praktikum : " . $nilai_tugas;
}



?>