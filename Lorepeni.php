<?php 
       include("connexion.php");
       ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,700;1,200;1,400&display=swap" rel="stylesheet">
</head>
<body>
     <!-- navbar -->
     <?php
     include ("navbar.php"); 
     ?>
     <section class="presentation">
     <?php
            $reponse = $pdo->query("select * from gaoua where id=1");
            while($donnees = $reponse->fetch()){
                ?> 
        
        <!-- <h1>Les Ruines de Lorépeni</h1> -->
        <h1><?php echo $donnees["h1"] ?></h1>
        <?php
        }
        ?> 
        <div class="intro">
        <div class="ruine">
        <?php
            $reponse = $pdo->query("select * from gaoua where id=1");
            while($donnees = $reponse->fetch()){
                ?> 

        <!-- <p>Loropéni est une commune rurale et le chef-lieu du département de Loropéni dans la province du Poni de la région Sud-Ouest au Burkina Faso. Elle est célèbre pour abriter les ruines de Loropéni, une forteresse inscrite dans la liste du patrimoine mondial de l'UNESCO en 2009</p > -->
        <p><?php echo $donnees["paragraphe"] ?></p>
        
        </div>
        <?php
        }
        ?> 
        <div>
            <img src="Lorepeni.jpg" alt="">
        </div>
        </div>
        <div class="intro">
        <div class="ruine">
        <?php
            $reponse = $pdo->query("select * from gaoua where id=1");
            while($donnees = $reponse->fetch()){
                ?> 

            <!-- <p>Les ruines de Loropéni sont situées à 45 kilomètres de la ville de Gaoua. Il est le premier site burkinabè inscrit au patrimoine mondial de l'Unesco en 2009. Les ruines de Loropéni sont construites avec des pierres latéritiques et de l'argile.</p> -->
            <p><?php echo $donnees["paragraphe"] ?></p>
        </div>
        <?php
        }
        ?> 
        <div>
            <img src="ruine1.jpg" alt="">
        </div>
        </div> 
      
     </section>
     <section class="description">
     <?php
            $reponse = $pdo->query("select * from home where id=1");
            while($donnees = $reponse->fetch()){
                ?> 
             <h1><?php echo $donnees["titre"] ?></h1>
        <!-- <h1> Le Musée des civilisations des peuples du Sud-Ouest</h1> -->

        <?php
        }
        ?> 
        <div class="lobi">
            <!-- ici -->
            <!-- <div><img src="lobi.jpg" alt=""></div> -->
            <div>
            <?php
            $reponse = $pdo->query("select * from home where id=1");
            while($donnees = $reponse->fetch()){
                ?> 
                <img src="<?php echo $donnees["images"] ?>" alt="">
             
            </div>
            <?php
        }
        ?> 

            <div class="CC"><img src="lobi5.jpg" alt=""></div>
        </div>
        <div class="lob">
            <div><img src="lobi3.jpg" alt=""></div>
            <div class="CC"><img src="lobi4.jpg" alt=""></div>
        </div>
     </section>
     <!-- footer -->
     <?php
     include ("footer.php"); 
     ?>
    
    
</body>
</html>