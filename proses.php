<?php
if(isset($_POST['submit'])){
	foreach($_POST['hob'] as $item){
      
      echo $item ."<br/>";
}
}
?>
<?php
if (isset($_POST['submit'])){
$fileName = $_FILES['gambar']['nama'];
// Simpan di Folder Gambar
move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['nama']);
echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";   
}
?> 
