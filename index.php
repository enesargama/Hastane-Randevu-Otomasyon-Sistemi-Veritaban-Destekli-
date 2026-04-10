<?php include "config/db.php";
if(!isset($_SESSION['login'])) header("Location:login.php");
$res=$conn->query("SELECT * FROM randevular");
?>
<h1>Randevular</h1>
<a href="add.php">Yeni</a>
<a href="logout.php">Çıkış</a>
<table border=1>
<tr><th>ID</th><th>Hasta</th><th>Doktor</th><th>Tarih</th><th>İşlem</th></tr>
<?php while($r=$res->fetch_assoc()){ ?>
<tr>
<td><?=$r['id']?></td>
<td><?=$r['hasta_adi']?></td>
<td><?=$r['doktor_adi']?></td>
<td><?=$r['tarih']?></td>
<td>
<a href="delete.php?id=<?=$r['id']?>">Sil</a>
</td>
</tr>
<?php } ?>
</table>
