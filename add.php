<?php include "config/db.php";
if($_POST){
$conn->query("INSERT INTO randevular(hasta_adi,doktor_adi,tarih,durum)
VALUES('".$_POST['hasta']."','".$_POST['doktor']."','".$_POST['tarih']."','Aktif')");
header("Location:index.php");
}
?>
<form method=post>
<input name=hasta placeholder="Hasta">
<input name=doktor placeholder="Doktor">
<input type=datetime-local name=tarih>
<button>Kaydet</button>
</form>
