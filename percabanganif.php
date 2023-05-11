<form method="POST">
	<input type="text" name="angka">
	<input type="submit" name="proses" value="proses">
</form>

<?php
    //Input
    if (isset($_POST['proses'])) {
        $angka = $_POST['angka'];

        //proses
        if ($angka < 6.3) {
            $warna = "yellow";
        } elseif ($angka <= 7.3) {
            $warna = "green";
        } else {
            $warna = "red";
        }

        //Output
        echo "<div style='background: $warna;'> angka = $angka </div>";
    }
?>
