<?php include "config/db.php";
if($_POST){
$u=$_POST['user'];
$p=$_POST['pass'];
$res=$conn->query("SELECT * FROM users WHERE username='$u' AND password='$p'");
if($res->num_rows>0){
$_SESSION['login']=true;
header("Location:index.php");
}else{
echo "Hatalı giriş";
}
}
?>
<form method=post>
<input name=user placeholder="Kullanıcı">
<input name=pass type=password placeholder="Şifre">
<button>Giriş</button>
</form>
