<?php
$db=new PDO("mysql:host=localhost;dbname=proje;charset=utf8", "root", "");
if(!$db)
{
	echo "VERİ TABANI BAGLANAMADI!!";	
}
?>