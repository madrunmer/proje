<?php
$db=new PDO("mysql:host=localhost;dbname=proje2;charset=utf8", "root", "");
if(!$db)
{
	echo "VERİ TABANI BAGLANAMADI!!";	
}
?>