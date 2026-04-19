<?php
$hasil = 0;
if(isset($_POST['jumlah'])){
    $hasil = $_POST['nilai1'] + $_POST['nilai2'];
}
else if(isset($_POST['kurang'])){
    $hasil = $_POST['nilai1'] - $_POST['nilai2'];
}
else if(isset($_POST['kali'])){
    $hasil = $_POST['nilai1'] * $_POST['nilai2'];
}
else if(isset($_POST['bagi'])){
    $hasil = $_POST['nilai1'] / $_POST['nilai2'];
}
?>

<html>
    <body>
        <form action="" method = "post">
            <input type="number" name = "nilai1" placeholder="Nilai 1">
             <br><br>
            <input type="number" name = "nilai2" placeholder="Nilai 2">
            <br><br>
            <input type="submit" value="Hitung" name = "jumlah">
            <input type="submit" value="Kurang" name = "kurang">
            <input type = "submit" value="Kali" name = "kali">
            <input type = "submit" value="Bagi" name = "bagi">
            <br><br>
            Hasil : <?php echo $hasil; ?>
        </form>
    </body>
</html>