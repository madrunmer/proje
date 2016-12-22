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
<h1 style="margin:50px 0 0 0;">Duyuruyu Gir</h1>	<br>
<table style="margin:0px 0 0 0;">
<form action="" method="post">
<tr>
	<td>Duyurunun Başlıgı:</td>
    <td><input type="text" name="baslik"/></td>
</tr>
<tr>
	<td>Duyuru:</td>
    <td><textarea name="icerik"></textarea></td>
</tr>
<tr>
	<td></td>
	<td><button type="submit" name="deneme">Kaydet!</button></td>
</tr>
</form>
<!--<form method="post2">
<input type="button" value="Admin Kayıt!">
<button type="submit" name="deneme2">Admin Kayıt!</button>
<a href="adminkayit.php">Admin Kayıt!</a>
</form>
<!--
<h1>Sinif1 Notlarını Gir</h1>
<form action="" method="post">
Duyurunun Başlıgı:<input type="text" name="baslik"/><br>
Duyuru:<input type="text" name="icerik"/><br>
<button type="submit" name="deneme1">Kaydet!</button><br>

</form>-->


<!--<td><h1>Siniflar</h1></td>
</tr>
<tr>
<td></td>
<td><input name="button" type="submit" value="Sinif1" onclick="window.location ='sinif1.php'"></td>
</tr>
<tr>
<td></td>
<td><input name="button" type="submit" value="Sinif1" onclick="window.location ='sinif1.php'"></td>
</tr>
<tr>
<td></td>
<td><input name="button" type="submit" value="Sinif1" onclick="window.location ='sinif1.php'"></td>
</tr>
<tr>
<td></td>
<td><input name="button" type="submit" value="Sinif1" onclick="window.location ='sinif1.php'"></td>-->

<tr>

<tr><td></td><td></td></tr>


</table>
<!--<input name="button" type="submit" value="Geri Dön" onClick="window.location ='notgor.php'">-->
</center>
</div>
        
        
        
        </div>
      </main><div style="width:100%; height:80px;background:rgb(63,81,181);"><center style="color:white">Sungur Bilişim</center></div>
    </div>
  </body>
</html>