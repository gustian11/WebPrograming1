<table border="1">
    <tbody>
        <tr>
            <td>Angka 1</td>
            <td><input type="text" name="angka_1"></td>
        </tr>

        <tr>
            <td>Angka 2</td>
            <td><input type="text" name="angka_2"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="radio" name="bangun_ruang" value="segitiga"> Segitiga</td>
        </tr>

        <tr>
            <td colspan="2"><input type="radio" name="bangun_ruang" value="persegi panjang"> Persegi panjang</td>
        </tr>
    </tbody>
</table>
<br>

<form action="" method="POST">
    <input type="submit" name="submit" value="Submit">
    <input type="reset" value="Batal">
</form>

<?php 
if (isset($_POST['submit'])) {
    $a1 = $_POST['angka_1'];
    $a2 = $_POST['angka_2'];

    if (isset($_POST['bangun_ruang'])) {
        $bangun_ruang = $_POST['bangun_ruang'];

        if ($bangun_ruang == 'segitiga') {
            $luas_segitiga = 0.5 * $a1 * $a2;
            echo "Luas segitiga dengan alas $a1 dan tinggi $a2 adalah $luas_segitiga";
        } else if ($bangun_ruang == 'persegi panjang') {
            $luas_persegi_panjang = $a1 * $a2;
            echo "Luas persegi panjang dengan panjang $a1 dan lebar $a2 adalah $luas_persegi_panjang";
        }
    } else {
        echo "Mohon pilih bangun ruang terlebih dahulu.";
    }
}
?>
