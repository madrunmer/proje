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
          <a class="mdl-navigation__link" href="index.php">Başa Dön</a>
          <a class="mdl-navigation__link" href="duyurugor.php">Duyurular</a>
          <a class="mdl-navigation__link" href="notgor.php">Duyurulara Bak</a>
         <a class="mdl-navigation__link" href="odevler.php">Ödevlere Bak</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content">
        
        
        <div id="contentic">
<center>
<br><br><br><br>
<?php
include_once("baglanti3.php");
error_reporting(0);
 $aera=$_POST['x'];
?>
<form method="post" action="">	
Ögrenci No:<input type="text" name="x" value="<?php echo $aera ?>"/>
<input type="submit" name="button"/>
</form>
<?php

echo "<table>";
 
echo '<tr><td>Ad</td><td>Soyad</td><td>Sınıf</td><td>No</td><td>Ders</td><td>Konu</td><td>Ödev</td><td>Puan</td><td>Tarih</td></tr>';

 if(isset($aera))
 {
$sorgu=mysql_query("select * from odev where no like '%$aera%' ");//isim sütununda a harfi geçenleri çektik.

 }else{
	 $sorgu=mysql_query("select * from odev");

	 }
//verilerin hepsini saydırdık.
if($sorgu){//eğer veri çekildiyse
echo "";

while($kayit=mysql_fetch_array($sorgu)){
    echo '<tr>';
	echo '<td>'.$kayit["ad"].'</td>';
	echo '<td>'.$kayit["soyad"].'</td>';
    echo '<td>'.$kayit["sinif"].'</td>';
    echo '<td>'.$kayit["no"].'</td>';
	echo '<td>'.$kayit["ders"].'</td>';
	echo '<td>'.$kayit["konu"].'</td>';
    echo '<td>
	<a href="'.$kayit["odev"].'"download="'.$kayit["odev"].'"<a href="'.$kayit["odev"].'"/>İndir</a>
	<a  href="'.$kayit["odev"].'" download="'.$kayit["odev"].'">indir </a>
	
	</td>';
    echo '<td>'.$kayit["puan"].'</td>';
    echo '<td>'.$kayit["tarih"].'</td>';

    echo '</tr>';
}
echo '</table>';
}
else{
echo "Veri çekilemedi";
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