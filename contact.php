<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">    
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript" src="javascript.js"></script>
<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
<title>Page Title</title>
</head>
<body class="index2">
 
<div class="home"><p><a href="index.php"><b class="home-button">Back Home!</b></a></p></div>
 
 
        <div class="welkom"><h1>Neem hier contact met mij op:</h1><div>
        <div class="contact"></div>
        <div class="row">
            <div class="verplaats">
        <form class="phpform" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
            Naam: <input class="phpform2" type="text" name="naam"><br></br>
            Email: <input class="phpform2" type="text" name="email"><br></br>
            Tel: <input class="phpform2" type="text" name="tel"><br></br>
            Comment: <textarea class="phpform2" name="comment" rows="5" cols="40"></textarea><br></br>
            Geslacht: <input type="radio" name="geslacht" value="vrouw">Vrouw
            <input type="radio" name="geslacht" value="man">Man
            <input type="radio" name="geslacht" value="other">Anders
            <br><br/>
            <input type="submit">
        </form></div></div>
        <?php
        if (!empty($_POST)) {

            $br = "\r\n";

            $naam = htmlspecialchars($_POST["naam"]);
            $email = htmlspecialchars($_POST["email"]);
            $tel = htmlspecialchars($_POST["tel"]);
            $comment = htmlspecialchars($_POST["comment"]);            
            $geslacht = htmlspecialchars($_POST["geslacht"]);

            //Dit is het bericht dat je ontvangt.
            $msg = date('Y-m-d H:i:s') . $br;            
            $msg .= "Naam: " . $naam . $br;
            $msg .= "Email: " .$email . $br;
            $msg .= "Tel: " .$tel . $br;
            $msg .= "Comment: " .$comment . $br;
            $msg .= "Geslacht: " .$geslacht;

            mail("marten@lootgames.nl", "Contact from " . $name, $msg);
        }
        ?>
 
 <br></br>
  <br></br>
  
  

    <!-- dit is een functie die de leter kleur veranderd van de pagina link -->
    <script>document.getElementById("demo3").onmouseover = function() {mouseOver()};
document.getElementById("demo3").onmouseout = function() {mouseOut()};

function mouseOver() {
    document.getElementById("demo3").style.color = "red";
}

function mouseOut() {
    document.getElementById("demo3").style.color = "white";
} </script>
</body>
</html>