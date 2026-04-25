<?php
// fungsi untuk validasi
function validasi($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if (isset($_POST['daftar'])) { // diganti dari if($_SERVER["REQUEST_METHOD"] == "POST") karena onclick pada button type submit
    $nama = validasi($_POST['nama']);
    $jurusan = validasi($_POST['jurusan']);
    $data_pendaftar = $nama." | ".$jurusan." | ".date("H:i")."\n";

    // pengecekan nama kurang dari 3 karakter. Kalau min. 3 karakter, maka simpan data ke file
    if (strlen($nama) < 3) {
        $msg_error = "Pendaftaran gagal! Nama minimal harus terdiri dari 3 karakter";
        echo "<p align='center' style='color: red; font-weight:bold'>$msg_error</p>";
    } else {
        file_put_contents("pendaftar.txt", $data_pendaftar, FILE_APPEND);
        echo "<p align='center' style='color: green; font-weight:bold'>Data $nama berhasil didaftarkan!</p>";
    }
}
//jika tombol hapus ditekan, maka unlink pendaftar.txt
if (isset($_POST['hapus'])) {
    if (file_exists("pendaftar.txt")) {
        unlink("pendaftar.txt");
        echo "<p align='center' style='color: blue; font-weight:bold'>Data berhasil dihapus!</p>";
    }
}
?>

<h2 align="center">Form Pendaftaran Mahasiswa</h2>
<form method="POST">
    Nama Lengkap &nbsp; : &emsp;<input type="text" name="nama" required><br><br>
    Jurusan: 
    <select name="jurusan">
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
    </select><br><br>
    <button type="submit" name="daftar">Daftar sekarang</button>
    <!-- tambahkan tombol hapus di samping tombol daftar --> 
    &nbsp;&nbsp;<button type="hapus" name = "hapus">Hapus Semua Data</button>
</form>

<hr>
<h3 align="center">Daftar Pendaftar</h3>
<table border="1" cellpadding="5" align="center">
    <tr>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Waktu daftar</th>
    </tr>
<?php
    if(file_exists("pendaftar.txt")) {
        $file = fopen("pendaftar.txt", "r");
        while(($baris=fgets($file))!==false){
            $baris=trim($baris);
            if(empty($baris)) {continue;}
            $data=explode("|", $baris);
            echo "<tr>";
            echo "<td>".$data[0]."</td>";
            echo "<td>".$data[1]."</td>";
            echo "<td>".$data[2]."</td>";
            echo "</tr>";
        }
        fclose($file);
    }else {
        echo "<tr><td colspan='3' align='center'>Belum ada data</td></tr>";
    }
?>
</table>