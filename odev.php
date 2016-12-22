<html>
<head>
<meta charset=utf-8 >
<title>ödev</title>
</head>
<body>
<center>
<table style="margin:200px 0 0 0">
<form action="" method="post" name="" enctype="multipart/form-data">
<tr><td>Ad:</td><td> <input type="text" name="ad" /></td></tr>
<tr><td>Soyad:</td><td><input type="text" name="soyad" /></td></tr>
<tr><td>Sınıf:</td><td><input type="text" name="sinif" /></td></tr>
<tr><td>No:</td><td><input type="text" name="no" /></td></tr>
<tr><td>Ders:</td><td><input type="text" name="ders" /></td></tr>
<tr><td>Konu:</td><td><input type="text" name="konu" /></td></tr>
<tr><td>Ödev:</td><td><input type="file" name="dosya" /></td></tr>
<tr><td>Not:</td><td><input type="text" name="puan" /></td></tr>
<tr><td></td><td><input type="submit" value="Gönder" /></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
</form>
</table>
</center>


<?php
include 'baglanti2.php';
var_dump($_POST);
if(isset($_POST['ad']))
{
	$ad=$_POST['ad'];
	$soyad=$_POST['soyad'];
	$sinif=$_POST['sinif'];
	$no=$_POST['no'];
	$ders=$_POST['ders'];
	$konu=$_POST['konu'];
	$puan=$_POST['puan'];
	$kaydet=$db->query("insert into odev (ad,soyad,sinif,no,ders,konu,puan) values('$ad','$soyad','$sinif','$no','$ders','$konu','$puan')");
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
<?php


if(isset($_FILES['dosya'])) {
   echo '<br>Dosya gönderilmiş';
} else {
   echo 'Lütfen bir dosya gönderin';
}
if(isset($_FILES['dosya'])){
   $hata = $_FILES['dosya']['error'];
   if($hata != 0) {
      echo 'Yüklenirken bir hata gerçekleşmiş.';
   }  else {
         $tip = $_FILES['dosya']['type'];
         $isim = $_FILES['dosya']['name'];
         $uzanti = explode('.', $isim);
         $uzanti = $uzanti[count($uzanti)-1];
         if( $uzanti != 'pdf') {
            echo '<br>Yanlızca PDF dosyaları gönderebilirsiniz.';
         } else {
            $dosya = $_FILES['dosya']['tmp_name'];
            copy($dosya, 'dosya/' . $_FILES['dosya']['name']);
            echo '<br>Dosyanız upload edildi!';
			$_FILES=$_POST['dosya'];
		$k=$db->query("insert into odev (dosya) values('$dosya')");
		if(!$k)
	{
		echo"DOSYA İSMİ KAYIT YAPILMAMAMITIR";	
	}
	else
	{	
		echo"DOSYA İSMİ KAYIT YAPILMIŞTIR";	
	};
         }
      }
   
}
?>

</body>
</html>