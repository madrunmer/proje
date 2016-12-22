
<html>
<head>

<title>proje giriş</title>
</head>

<body style="
background:url(img/sonbahar.jpg);
no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;">

<center>
<div style="border-radius:160px;width:300px;height:250px;background:grey;margin:200px 0 0 0;">
<h1 style="color:white;padding:30px 0 0 0;">Giriş Yap</h1>
</div>

<table style="margin:-180px 0 0 0;">
<tr>

<td style="color:white;">Kullanıcı Adı:</td>
<td><form action="" method="post"><input type="text" name="kadi"/></td>
</tr>
<tr>
<td style="color:white;">Şifre:</td>
<td><input type="password" name="sifre"/></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Giriş Yap!"/></form></td>
</tr>
<tr>
<td></td>
<td><input name="button" type="submit" value="Notları Gör" onClick="window.location ='notgor.php'"></td>
</tr>
<tr>
<td></td>
<td><input name="button" type="submit" value="Duyuruları Gör" onClick="window.location ='duyurugor.php'"></td></tr>
<tr>
<td></td>
<td><input name="button" type="submit" value="Ödevleri Gör" onClick="window.location ='odevler.php'"></td></tr>
</table>
</center>
<?php
include 'baglanti.php';
if($_POST)
{
	$kulad=$_POST['kadi'];
	$sifre=$_POST['sifre'];
	$kontrol=$db->prepare("select * from uye where kadi = ? && sifre = ?");
	$kontrol->bindParam(1,$kulad);
	$kontrol->bindParam(2,$sifre);
	$kontrol->execute();
	
	
	if($kontrol->rowCount() == 1)
	{
	header("location:duyuru.php");
	}
	else
	{echo "giriş başarısız";}
}
?>
</body>
</html>