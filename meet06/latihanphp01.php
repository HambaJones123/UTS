<?php
if(isset($_POST['kirim'])){
    echo "Nama : " . $_POST['nama'] . "<br>";
    echo "Umur : " . $_POST['umur'] . " Tahun";
}
?>

<html>
    <body>
        <form action="" method = "post">
            <input type="text" name = "nama">
            <input type="number" name = "umur">
            <input type="submit" value="Kirim" name = "kirim">
        </form>
    </body>
</html>