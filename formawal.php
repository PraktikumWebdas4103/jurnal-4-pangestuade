<?php
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
	}
?>
<form action="proses.php" method="POST"  enctype="multipart/form-data">
	Nama 	: <input type="text" name="nama[]" placeholder="Nama"><br>
	NIM 	: <input type="text" name="nim[]" placeholder="NIM"><br>
	Hobi	: <input type="checkbox" name="hob[]" value="Coding"> Coding
	<input type="checkbox" name="hob[]" value="Kayang"> Kayang
	<input type="checkbox" name="hob[]" value="Terbang"> Terbang
	<input type="checkbox" name="hob[]" value="Belajar"> Belajar <br>
	Upload	: <input type="file" name="gambar[]"><br>
	<input type="submit" name="submit" value="Send">
</form>
?>
