<!DOCTYPE html> <!--Detta är ett html dokument. -->
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/stylesheet.css"> <!--Här länkas stilen som används för min webbsida, det är en text/CSS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- Här har vi webbsidans jQuery.-->
</head>
    
<body><!-- Här nedan har vi allt i body.-->
<div id="omslag"><!-- gett id omslag som kommer finnas med i stylesheet och detta inkl banner,navigation tillsammans. -->
<div id="banner"><!-- Banner är den del på webbsidan som jag har valt att ha min bild på telefoner för finare design.-->
</div>
<nav id="navigation">   <!--Navigation, där har jag min meny och en sammandragning av alla sidor, så allt man behöver göra är att klicka på en rubrik så kommer man till den sidan. Så alla rubriker i nav (som är id för navigation) --> 

<ul id="nav">
<li><a href="index.php">Startsida</a></li>  
<li><a href="L%C3%A4ggintelefon.php"> Lägg in annons</a></li> 
<li><a href="Registrera.php">Skapa konto</a></li>
<li><a href="Login.php">Logga in</a></li>
<li><a href="omoss.php">Om oss</a></li>
 </ul>
</nav>
    
<div id="innehålls_area"><!--Här har vi allt i body som syns på webbsidans nedre del efter menyn, så allt som skrivs och nämns på sidan ser man under här, använt mig av h1,h3 och p tags.-->
<h1>Välkommen till OldPhone!</h1>
<hr>
    
<h3>Sälj din mobil </h3>
<p>
Sälj din gamla mobil till oss. Nu slipper du krångla med annonser och betala för att få din gamla mobil såld.
Har du en mobil som du vill få sålt skicka in din annons!
Då får du gärna ringa oss på 010 - 16 90 100 så kan vi hjälpa dig.
Det går bra att skicka in mobilen med posten eller komma in direkt till en av våra butiker!
 </p>          
    
  <p id="BiobiljettPresent">Sälj din smartphone/surfplatta snabbt!<a href="Läggintelefon.php">- Sälj din begagnade mobil redan idag</a></p> <!--Här anropas id (BiobiljettPresent) från Javascript längst ner på denna sidan-->  <!--Här kan man snabba på processen och gå direkt till att lämna in sin annons med en länk som för vidare en till den andra sidan man kan "lägga in en annons". -->  

<h3>Om Cookies</h3>
<p>Vi använder så kallade "cookies" för att få en bra funktionalitet i vår internetbutik. Vi samlar inte in någon personlig information om dig som besökare. Istället används cookies för att hålla koll på din varukorg samt komma ihåg de val och inställningar du gjort i butiken.
<div id="innehålls_area">
    
<p>KONTAKTA OSS:
    <br>
OldPhone 
     <br>
Värmlandgatan 3
     <br>
69132 Södertälje
Tel: 010-1960200
E-post: info@OldPhone.se
</p>
    
</div>         
  <footer>
<p>OldPhone&copy;2018 webbsidan gjord av Eyobed Geda Elias </p>
</footer>      
    
 </div> 
</div>     
</body>
</html>

<!-- Här under är Javascripten som anropas längre upp på sidan och som har funktionen, att om en besökare klickar på länken längre upp på sidan så kommer den att visa upp ett alertmeddelande med Skicka in din begagnade telefon och få biobiljett!, sen går den vidare till sidan då man kan lämna in sin telefon.-->

<script> 
$(document).ready(function(){
$("#BiobiljettPresent").mousedown(function(){
alert("Skicka in din begagnade telefon och få biobiljett!");
window.location.replace("Läggintelefon.php");
});
});
</script>