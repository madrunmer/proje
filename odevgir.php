<html>
  <head>
  <title>Ödev Gir</title>
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Title</span>
          <div class="mdl-layout-spacer"></div>
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            
            <a class="mdl-navigation__link" href="adminkayit.php">Admin Kaydet</a>
            <a class="mdl-navigation__link" href="index.php">Çıkış Yap</a>
          </nav>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Title</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="duyuru.php">Duyuru Gir</a>
          <a class="mdl-navigation__link" href="notgir.php">Not Gir</a>
          <a class="mdl-navigation__link" href="odevgir.php">Ödev Gir</a>
          <a class="mdl-navigation__link" href="adminduyurugor.php">Duyurulara Bak</a>
          <a class="mdl-navigation__link" href="adminnotgor.php">Notlara Bak</a>
          <a class="mdl-navigation__link" href="odevbak.php">Ödev Bak</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content">
        
        
        <div id="contentic">
<center>
<br><br><br><br>
<table style="width:300px;height:auto;">
<form action="" method="post" name="form1" enctype="multipart/form-data">
<tr><td colspan="2"><h2>Ödev Gir</h2></td><td></td></tr>
<tr><td>ad:</td><td><input type="text" name="ad"/></td></tr>
<tr><td>soyad:</td><td><input type="text" name="soyad"/></td></tr>
<tr><td>sinif:</td><td><input type="text" name="sinif"/></td></tr>
<tr><td>no:</td><td><input type="text" name="no"/></td></tr>
<tr><td>ders:</td><td><input type="text" name="ders"/></td></tr>
<tr><td>konu:</td><td><input type="text" name="konu"/></td></tr>
<tr><td>odev:</td><td><input type="file" name="resim"/></td></tr>
<tr><td>puan:</td><td><input type="text" name="puan"/></td></tr>
<tr><td>tarih:</td><td><input type="datetime-local" name="tarih"/></td></tr>
<tr><td></td><td><input type="submit" name="gonder" value="Kaydet"/></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
</form>
</table>

<?php
include_once("baglanti3.php");
?>

    <?php

if($_POST){//Form gönderildi mi?
	
		if ($_FILES["resim"]["type"]=="application/pdf"){//dosya tipi jpeg olsun
			$ad=$_POST["ad"];
			$soyad=$_POST["soyad"];
			$sinif=$_POST["sinif"];
			$no=$_POST["no"];
			$ders=$_POST["ders"];
			$konu=$_POST["konu"];
			$puan=$_POST["puan"];
			$tarih=$_POST["tarih"];
			$dosya_adi=$_FILES["resim"]["name"];
			//Dosyaya yeni bir isim oluşturuluyor
			$uret=array("as","rt","ty","yu","fg");
			$uzanti=substr($dosya_adi,-4,4);
			$sayi_tut=rand(1,10000);
			$nokta=(".");
			$yeni_ad="dosya/".$uret[rand(0,4)].$sayi_tut.$nokta.$uzanti;
			//Dosya yeni adıyla dosyalar klasörüne kaydedilecek
			if (move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad)){
				echo 'Dosya başarıyla yüklendi.';
				//Bilgiler veri tabanına kaydedilsin
				
				try{
					$sorgu=mysql_query("insert into odev (ad,soyad,sinif,no,ders,konu,odev,puan,tarih) values ('$ad','$soyad','$sinif','$no','$ders','$konu','$yeni_ad','$puan','$tarih')");
					
					
				}
				catch(Exception $e)
				{
					var_dump($e);	
				}
				
				if ($sorgu){
					echo 'Veritabanına kaydedildi. '.mysql_error($baglanti);
				}else{
					echo 'Kayıt sırasında hata oluştu!';
				}
			}else{
				echo 'Dosya Yüklenemedi!';
			}
		}else{
			echo 'Dosya yalnızca jpeg formatında olabilir!';
		}
	
}
?>


<br><br><br><br>
</center>
</div>  
        </div>
      </main><div style="width:100%; height:80px;background:rgb(63,81,181);"><center style="color:white">Sungur Bilişim</center></div>
    </div>
  </body>
</html>