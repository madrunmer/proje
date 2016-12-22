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
            
            <a class="mdl-navigation__link" href="index.php">Çık</a>
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


<h1>Liste</h1><br>
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
  		
		echo '<table>';
		//echo '<tr><td>Ad</td><td>Soyad</td><td>Sınıf</td><td>No</td><td>Ödev</td><td>Puan</td><td>Tarih</td></tr>';
		echo "<tr><td>".$al["ad"].'</td>';//Aldığımız verilerden isim sütununu ekrana bastırdık
		 echo "<td>".$al['soyad']."</td>";
	 	 echo "<td>".$al['numara']."</td>";
		 echo "<td>".$al['ders']."</td>";
		 echo "<td>".$al['puan'].""."<br></td></tr>";
		 echo'</table>';
		 error_reporting(0);
		
}
}else{
echo "Aranan numarada ögrenci yok.";}
}else{
echo "Veri çekilemedi";
}
}catch (PDOException $h) {
$hata=$h->getMessage();
echo "<b>HATA VAR :</b> ".$hata;//bağlantı hatası olursa.hata var yaz.
}
?>





</center>
</div>
        
        
        
        </div>
      </main><div style="width:100%; height:80px;background:rgb(63,81,181);"><center style="color:white">Sungur Bilişim</center></div>
    </div>
  </body>
</html>
