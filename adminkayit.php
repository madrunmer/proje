<?php
include("baglanti.php");
if($_POST)

{
	$kadi=$_POST['kadi'];
	$sifre=$_POST['sifre'];
	$kaydet=$db->query("insert into uye (kadi,sifre) values('$kadi','$sifre')");
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
            
            <a class="mdl-navigation__link" href="duyuru.php">Admin Paneli</a>
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
<br>
<h1>Admin Kişisi ekle</h1>
<table style="margin:auto;">
<tr>
<td></td>
<td></td>
</tr><form action="" method="post">
<tr>
<td>Kullanıcı Adı:</td>
<td><input type="text" name="kadi"/></td>
</tr>
<tr>
<td>Şifre:</td>
<td><input type="password" name="sifre"/><br></td>
</tr>
<tr>
<td></td>
<td><button type="submit" name="deneme2">Admini Kaydet!</button></td>
</tr>
</table>




</center>
</div>
        
        
        
        </div>
      </main><div style="width:100%; height:80px;background:rgb(63,81,181);"><center style="color:white">Sungur Bilişim</center></div>
    </div>
  </body>
</html>
