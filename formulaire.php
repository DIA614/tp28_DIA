<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,700;1,200;1,400&display=swap" rel="stylesheet">

</head>
<body>
<?php
     include ("navbar.php"); 
     ?>
 <!-- 1ere partie -->
    <!-- section images -->
    <section class="AA">
        <section class="BB">
            <img class="img" src="puma.jpg" alt="">
            <!-- <img src="téléchargement2.jpg" alt=""> 
            <img src="téléchargement3.jpg" alt=""> -->
        </section>  
        <!-- section formulaire -->  
        <section class="resistration"><br><br>
            <div class="DD">REGISTRATION<br><br>
            <!-- <i class="fa-solid fa-circle-dot un"></i>
            <i class="fa-solid fa-circle-dot deux"></i>
            <i class="fa-solid fa-circle-dot trois"></i><br><br> -->
            <div>Send an optional message</div><br><br>
        </div>
            <!-- <i class="fa-solid fa-sliders"></i> -->
      <!-- <section class="resistration">      -->
        <form id="inscription">
        <div class="name">      
    <div class="EE">
        <div> <input class="CC" type="email" name="Your Email" placeholder="Your Email" id="YourEmail">
        <span id="gh"></span></div> <br><br>
        <div>   <input class="CC" type="text"pattern="[a-b]+" name="First name" placeholder="First Name" id="Fristname">
            <span id="gi"></span></div> <br><br>
        <div> <input class="CC" type="number" max="5" name="Age" placeholder="Age" id="Age">
            <span id="gj"></span></div> <br><br>
        <div><input class="CC" type="text" name="Your Contry" placeholder="Your Contry" id="Yourcontry">
            <span id="gk"></span></div>
    </div>
    
    <div class="FF">
    <div><input class="CC" type="text" name="Last Name" placeholder=" Last Name" id="Lastname"> 
        <span id="gl"></span></div> <br><br>
    <div><input class="CC" type="number" name="Phone Number" placeholder="Phone Number" id="Phonenumber">
        <span id="gm"></span></div> <br><br>
    <div> <p><input type="radio" name="Radio" placeholder="Radio" id="Radio"> Male 
     <input type="radio" name="Radio" placeholder="Radio" id="Radio"> Female 
     <span id="gn"></span></p>
    </div><br><br><br><br><br>
    <div>
        <!-- <button class="one" id="Valider">Valider</button> -->
        <input class="CC" type="submit" name="submit" placeholder="Your Pass word" id="YourEmail">
    </div>

</section>
<!-- footer -->
<?php
     include ("footer.php"); 
     ?>