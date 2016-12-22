<html>
<head>
<title></title>
<meta charset="utf-8" />
</head>
<body>
<form action="" method="post">
Ögrenci No:<input type="text" name="x" placeholder="Kelimeyi yazınız" />
<input type="submit" value="ara" name="buton">
</form>
<?php
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

$baglanti=new PDO("mysql:host=localhost;dbname=proje","root","");//bağlantı yaptık
echo "Mysql Bağlantısı Başarıyla Sağlandı. <br />";//bağlantı varsa ekrana yaz.
$aera=$_POST['x'];
$ara=$baglanti->query("select * from sinif1 where numara like '%$aera%' ");//isim sütununda a harfi geçenleri çektik.
$miktar=$ara->rowCount();//verilerin hepsini saydırdık.
if($ara){//eğer veri çekildiyse
echo "veri çekildi <br />";
if($miktar>0){
foreach($ara as $al){//foreach $arada ki tüm verileri tek tek $al değişkenine aktaracak
echo $al["ad"];//Aldığımız verilerden isim sütununu ekrana bastırdık
;
		 echo "&nbsp;".$al['soyad']."";
		 echo "&nbsp;".$al['numara']."";
		 echo "&nbsp;".$al['ders']."";
		 echo "&nbsp;".$al['puan'].""."<br>";
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
</body>
</html>
