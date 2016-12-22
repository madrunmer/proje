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

<?php 
 include("baglanti2.php");
$query = $db->prepare("SELECT * FROM duyuru");
$query->execute();
 
if ( $query->rowCount() ){
 
     foreach( $query as $row ){
 
          echo "<h1 style='color:red;'>".$row['baslik']."</h1>"."<br>",$row['icerik']."<br>";
 
     }
}
 
?>





</center>
</div>
        
        
        
        </div>
      </main>
      	<div style="width:100%; height:80px;background:rgb(63,81,181);"><center style="color:white">Sungur Bilişim</center></div>
    </div>
    
  </body>
</html>
