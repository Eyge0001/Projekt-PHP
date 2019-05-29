<!DOCTYPE html><!--Detta är ett html dokument. -->
<html>
<head>
 <meta charset="utf-8"> 
<link rel="stylesheet" type="text/css" href="styles/stylesheet.css"><!--Här länkas stilen som används för min webbsida, det är en text/CSS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<div id="omslag">
<div id="banner">
</div>
<nav id="navigation">    
<ul id="nav">
<li><a href="index.php">Startsida</a></li>  
<li><a href="L%C3%A4ggintelefon.php"> Lägg in annons</a></li> 
<li><a href="Registrera.php">Skapa konto</a></li>
<li><a href="Login.php">Logga in</a></li>
<li><a href="omoss.php">Om oss</a></li>
</ul>
</nav>
<div id="innehålls_area">
<h1>Om oss</h1><!--Här har vi allt i body som syns på webbsidans nedre del efter menyn, så allt som skrivs och nämns på sidan ser man under här, använt mig av h1,h3 och p tags.-->
<hr>
    
<h3>Här hittar du all information om OldPhone</h3>
<p>
Att köpa en bra begagnad mobiltelefon ska vara billigt, enkelt och kul!
Vi vill att alla, oavsett storlek på plånbok, ska ha möjlighet att köpa mobiler ifrån de bästa märkena utan att bli ruinerade. Hur det är möjligt? Vi säljer mobiltelefoner med något år på nacken som ofta är minst lika bra som nyare modeller!
Oldphone  drivs av EGE AB och nylanserades i november 2018. Oldphone drivs av 1 mobilnörd och affärsidéen var, och är liksom nu, att hjälpa dig att enkelt köpa en mobiltelefon i toppklass till ett pris som alla kan betala!
Varje mobiltelefon som vi får in går vi noggrant igenom innan vi säljer den vidare. Vi ser till så att den fungerar lika bra som när den var ny.
Eftersom vi är så säkra på kvaliteten på mobilerna som vi säljer så lämnar vi självfallet en hundraprocentig nöjdhetsgaranti och du som kund kan kontakta oss när som helst på dygnet. Vi lovar att svara så snabbt som möjligt!
Välkommen som kund hos Oldphone.se! 
</p>                
        
 <p id="BiobiljettPresent">Sälj din smartphone/surfplatta snabbt!<a href="Läggintelefon.php">- Sälj din begagnade mobil redan idag</a></p><!--Här anropas id (BiobiljettPresent) från Javascript längst ner på denna sidan--><!--Här kan man snabba på processen och gå direkt till att lämna in sin annons med en länk som för vidare en till den andra sidan man kan "lägga in en annons". -->  

        
<div id="innehålls_area">
<h3>KÖPINFORMATION</h3><!--Här har vi allt i body som syns på webbsidans nedre del efter menyn, så allt som skrivs och nämns på sidan ser man under här, använt mig av h3 och p tags.-->
<p>Din order kommer att skickas från vårt lager. Ändringar och tillägg i din order måste göras innan ordern har behandlats av oss. Om du upptäcker eventuella felaktigheter på din order är det därför viktigt att du omgående kontaktar vår kundservice för att om möjligt ändra din order. Vid uppenbara felaktigheter (t.ex. fel pris, tryckfel m.m.) förbehåller vi oss rätten att korrigera felet i efterhand. Om du inte är nöjd med vår korrigering har du självfallet rätt att avboka din order. Vi förbehåller oss också rätten att inte genomföra en beställning i de fall varan är slut i lager, om maxantal per kund överskridits eller vid tekniska fel. 
Vi ingår endast avtal med myndig person, alternativt omyndig med målsmans medgivande samt med juridisk person. Åldersgränsen vid postorderköp är 18 år. 
 </p>  
    
</div>      
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
window.location.replace("Läggintelefon.php");});
});
</script>