<?php 
 include("connexion.php");
 $req=$pdo->prepare("select * from image where id=? limit 1");
 $req->setFetchMode(PDO::FETCH_ASSOC);
 $req->execute(array($_GET["id"]));
 $tab=$req->fetchALL();
 echo $tab[0]["bin"];
?>   