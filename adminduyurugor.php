<?php
include("baglanti2.php");
if(isset($_POST['deneme']))
{
	$baslik=$_POST['baslik'];
	$icerik=$_POST['icerik'];
	$kaydet=$db->query("insert into duyuru (baslik,icerik) values('$baslik','$icerik')");
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
/*include("baglanti2.php");
if(isset($_POST['deneme1']))
{
	$baslik=$_POST['baslik'];
	$icerik=$_POST['icerik'];
	$kaydet=$db->query("insert into duyuru (baslik,icerik) values('$baslik','$icerik')");
	if(!$kaydet)
	{
		echo"KAYIT YAPILMAMAMITIR";	
	}
	else
	{
		
		echo"KAYIT YAPILMIŞTIR";	
	};
}
*/

?>
<?php
include("baglanti2.php");
if(isset($_POST['deneme1']))
{
	$ad=$_POST['ad'];
	$soyad=$_POST['soyad'];
	$numara=$_POST['numara'];
	$sinif=$_POST['sinif'];
	$ders=$_POST['ders'];
	$puan=$_POST['puan'];
	$kaydet=$db->query("insert into sinif1 (ad,soyad,numara,sinif,ders,puan) values('$ad','$soyad','$numara','$sinif','$ders','$puan')");
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
  <title>Duyuru Gir</title>
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



<h1 style="margin:50px 0 0 0;">Duyurular</h1>	
<?php 
 include("baglanti2.php");
$query = $db->prepare("SELECT * FROM duyuru");
$query->execute();
 
if ( $query->rowCount() ){
 
     foreach( $query as $row ){
 
          echo "<h1 style='color:red;'>".$row['baslik']."</h1>"."<br>",$row['icerik']."<br>";
 
     }
}
 
?><br>
<input name="button" type="submit" value="Geri Dön" onClick="window.location ='index.php'">




</center>
</div> 
        </div>
      </main><div style="width:100%; height:80px;background:rgb(63,81,181);"><center style="color:white">Sungur Bilişim</center></div>
    </div>
  </body>
</html>