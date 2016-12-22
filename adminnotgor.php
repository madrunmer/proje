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
<br><br><br><br>

<form method="post" action="">	
Ögrenci No:<input type="text" name="x" />
<input type="submit" name="button"/>
</form>
<?php
		 error_reporting(0);
/*include("baglanti2.php");

$aramasorgusu = @mysql_real_escape_string($_GET['ara']);
$sonucsorgu = @mysql_query("SELECT * FROM sinif1 WHERE numara LIKE '%".$aramasorgusu."%'" );
if(@mysql_num_rows($sonucsorgu)>0){
 while($sorguoku=@mysql_fetch_array($sonucsorgu)){
  echo $sorguoku['numara'].'<br>';
 }
}
else{
 echo 'Aradığınız İçerik Bulunamadı';
}*/
try{//hata varmı diye kontrol mekanizması.

$baglanti=new PDO("mysql:host=localhost;dbname=proje;charset=utf8","root","");//bağlantı yaptık
echo "";//bağlantı varsa ekrana yaz.
$aera=$_POST['x'];

$ara=$baglanti->query("select * from sinif1 where numara like '%$aera%' ");//isim sütununda a harfi geçenleri çektik.
$miktar=$ara->rowCount();//verilerin hepsini saydırdık.
if($ara){//eğer veri çekildiyse
echo "";
if($miktar>0){
foreach($ara as $al){//foreach $arada ki tüm verileri tek tek $al değişkenine aktaracak
echo $al["ad"];//Aldığımız verilerden isim sütununu ekrana bastırdık
;
		 echo "&nbsp;&nbsp;&nbsp;".$al['soyad']."";
		 echo "&nbsp;&nbsp;&nbsp;".$al['numara']."";
		 echo "&nbsp;&nbsp;&nbsp;".$al['ders']."";
		 echo "&nbsp;&nbsp;&nbsp;".$al['puan'].""."<br>";
		 error_reporting(0);
}
}else{
echo "Aranan kelime yok.";}
}else{
echo "veri çekilemedi";
}
}catch (PDOException $h) {
$hata=$h->getMessage();
echo "<b>HATA VAR :</b> ".$hata;//bağlantı hatası olursa.hata var yaz.
}
?>
<input name="button" type="submit" value="Geri Dön" onClick="window.location ='index.php'">




</center>
</div>
        
        
        
        </div>
      </main><div style="width:100%; height:80px;background:rgb(63,81,181);"><center style="color:white">Sungur Bilişim</center></div>
    </div>
  </body>
</html>