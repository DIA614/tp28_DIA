<!-- connexion -->
<?php
try{
    $pdo=new PDO('mysql:host=localhost;dbname=tourisme','root','',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e){
    die("Error" .$e->getMessage());
}
?>  