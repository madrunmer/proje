<?php
include("baglanti2.php");
if(isset($_POST['deneme1']))
{
	$ad=$_POST['ad'];
	$soyad=$_POST['soyad'];
	$numara=$_POST['numara'];
	$ders=$_POST['ders'];
	$puan=$_POST['puan'];
	$kaydet=$db->query("insert into sinif1 (ad,soyad,numara,ders,puan) values('$ad','$soyad','$numara','$ders','$puan')");
	if(!$kaydet)
	{
		echo"KAYIT YAPILMAMAMITIR";	
	}
	else
	{
		
		echo"KAYIT YAPILMIŞTIR";	
	};
}

?>
<html>
<head>
<title>Sınıf1</title>
</head>

<body>
<h1>Sinif1 Notlarını Gir</h1>
<form action="" method="post">
Ad:<input type="text" name="ad"/><br>
Soyad:<input type="text" name="soyad"/><br>
Numara:<input type="text" name="numara"/><br>
Ders:<input type="text" name="ders"/><br>
Puan:<input type="text" name="puan"/><br>
<button type="submit" name="deneme1">Kaydet!</button><br>

</form>
</body>
</html>