<!DOCTYPE html>
<html>

<head>
<script type="text/javascript" src="javascript.js"></script>  
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" type="text/css" href="css.css">
<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Portfolio van Marten</title>
</head>

<body>


<!-- Dit is de navigatie-balk -->

<div class="navigatie-balk">
<ul>
  <li class="navigatie"><a href="#marten" onclick="scrollToDiv()"><p class="kleur"><b>About</b></p></a></li>
  <li class="navigatie"><a href="#skills" onclick="scrollToDiv()"><p class="kleur"><b>Skills</b></p></a></li>
  <li class="navigatie"><a href="#project" onclick="scrollToDiv()"><p class="kleur"><b>Projects</b></p></a></li>
  <li class="navigatie"><a href="#contact" onclick="scrollToDiv()"><p class="kleur"><b>Contact</b></p></a></li>
</ul>
</div>

<!-- dit is mijn hoofd div -->

<div class="hoofd" id="home">
   <div class="welkom">
  <h1>Welkom op mijn website!</h1>
</div>
</div>

<!-- Dit is mijn introductie div -->
<div class="ik" id="marten">
   
      

          <div class="ik-text"><div class="ik-foto"><img class="marten-foto" src="marten.jpg"/></div>
          <h2>Hallo ik ben Marten Ekhart, een enthousiaste,<br> Junior Webdeveloper, uit Groningen.</h2>
         <p>Momenteel ben ik bezig met een, bootcamp tot Junior Webdeveloper.<br>
            Dit vind ik erg leuk om te doen! En dit zie ik mijzelf dan ook jaren doen.<br>
            Maar mijn uiteindelijke doel is om over 5 jaar van nu, <br> als game-developer 
            aan het werk te gaan.<br><br>

<!-- Dit zijn de social-media icons -->
       <a class="linkedIn" href="https://www.linkedin.com/in/marten-ekhart-b78335151/">
      <i class="fa fa-linkedin-square" style="font-size:80px;color:blue"></i>
     </a>
     <a class="linkedIn" href="https://www.facebook.com/profile.php?id=100013977704989">
       <i class="fa fa-facebook-official" style="font-size:80px;color:blue"></i>
       </a>
       <a class="linkedIn" href="https://github.com/martenEkhart">
       <i class="fa fa-github" style="font-size:80px;color:red"></i>
       </a>
      
  

         </p>
        </div>  
      
      
 
   
 
</div>

<!-- dit is mijn skills div -->
<div class="skills-achtergrond" id="skills">

<h2>Dit zijn mijn skills en hobby's</h2>

<div class ="container-skill" style="border-right: double white;">
    

    <p><b>HTML</b></p>
    <div class="container-taal">
      <div class="skills html">90%</div>
    </div>
    
    <p><b>CSS</b></p>
    <div class="container-taal">
      <div class="skills css">70%</div>
    </div>
    
    <p><b>JavaScript</b></p>
    <div class="container-taal">
      <div class="skills js">55%</div>
    </div>
    
    <p><b>PHP</b></p>
    <div class="container-taal">
      <div class="skills php">50%</div>
    </div>
    </div>

<div class ="container-skill" style="border-right: double white;"><p>
 <b>Onderwijs en opleidingen</b><br><br>
 <b>2010-2012</b><br>
 MBA : cursus moderne bedrijfsadministratie.<br><br>
 <b>2004-2010</b><br>
 MBO : Administrateur niveau 4.<br><br>
 <b>2001-2003</b><br>
 MBO : Financiële Dienstverlening niveau 4.<br><br>
 <b>1995-2000</b><br>
 MAVO : met ( Nederlands, Engels, Duits,<br> Wiskunde, Economie, Geschiedenis,
 Aardrijkskunde.)</p>
</div>

<div class ="container-skill">
  <p><b>Mijn hobby's</b><p>
    <dl class="lijst-hobby">
      <dt><b>Surfen</b></dt>
      <dd>- dit probeer ik te doen als ik op vakantie ga.</dd>
      <dt><b>voetbal</b></dt>
      <dd>- 1 x per week gezellig met de jongens</dd>
      <dt><b>Yoga</b></dt>
      <dd>- Na dit gedaan te hebben voel ik me altijd heerlijk soepel.</dd>
      <dt><b>Fitness</b></dt>
      <dd>-Doe ik om in form te blijven.</dd>
  </dl>
</div>
    
</div> 



<!-- dit is mijn project div -->
<div class="project" id="project">

<h2>Dit zijn mijn projecten</h2>

<div class="project1" style="border-right: double black;"> 
<h3>Dit is een game waar ik mee bezig ben</h3>
<a href="game.php"><img src="spel.PNG" style="max-width: 100%; border=0"/>
</a></div>

<div class="project1"><h3>Dit is mijn oefen/website<h3>
<iframe id="myFrame" src="https://lootgames.nl/" style="height:380px;width:100%"></iframe>

<!-- <button onclick="myFunction()">Try it</button> -->

</div>

</div>


<!-- dit is mijn footer -->

<div class="footer" id="contact">

<a class="footer-social" href="https://www.linkedin.com/in/marten-ekhart-b78335151/">
<i class="fa fa-linkedin-square" style="font-size:100px;color:blue"></i></a>
<a class="footer-social" href="https://www.facebook.com/profile.php?id=100013977704989">
<i class="fa fa-facebook-official" style="font-size:100px;color:blue"></i></a>
<a class="footer-social" href="https://github.com/martenEkhart">
<i class="fa fa-github" style="font-size:100px;color:red"></i></a>
<div class="footer-link">
<p><a href="contact.php" ><b style= "color: white; font-size: 45px">Contact Page!</b></a></p>
<p style= "color: white; font-size: 25px">&copy; 2018-<?php echo date("Y");?> </p>
  </div>


</div>



</body>
</html>
