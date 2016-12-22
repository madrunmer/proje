<?php
if (!@$baglanti=mysql_connect("localhost","root","")){
    die("Mysql'e bağlantı kurulamadı!".mysql_error());
}mysql_query("SET NAMES UTF8");
 
if (!@mysql_select_db("proje",$baglanti)){
    die("Veritabanına bağlantı kurulamadı!".mysql_error());
}
?>