<!DOCTYPE html> <!--Detta är ett html dokument. --> 
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/stylesheet.css"> <!--Här länkas stilen som används för min webbsida, det är en text/CSS. -->
<link rel="stylesheet" type="text/css" href="l%C3%A4mnaintele.php"> 
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

<form method="post" action="lämnaintele.php"> <!--Här är det en formmetod POST , där användaren/besökaren av webbsidan fyller i information om sin begagnade telefon/smartphone och detta skickas vidare till "lämnintele.php" där det finns en php som sammankopplar och lägger in den inmatade informationen om telefonen till min databas eyge0001 -->
<div class="container">
<h1>Skriv in information om mobilen</h1>
<h3>Obs! endast inloggade kan se annonserna på OldPhone's hemsida</h3>
<hr>
    
<label for="IMEInummer"><!--Här sammlar den information om IMEI numret och det måste fyllas i, får inte vara null, gäller även alla som kommer under. --> 
<b>IMEI-nummer</b></label>
<input type="text" placeholder="Fyll i mobilens IMEI-nummer" 
name="IMEInummer" required>
    
<label for="Mrk"><!--Det blev Mrk, förkortning av Märke. --> 
<b>Märke</b></label>
<input type="text" placeholder="Fyll i Mobil märket" 
name="Mrk" required>
    
<label for="Modell">
<b>Modell</b></label>
<input type="text" placeholder="Fyll i Mobil modell" 
name="Modell" required>
    
<label for="Pris">
<b>Pris</b></label>
<input type="text" placeholder="Fyll i försäljningspriset  " 
name="Pris" required>
    
<label for="Info">
<b>Info</b></label>
<input type="text" placeholder=" Fyll i information om din begagnad mobil" 
name="Info" required>
    
<button type="submit" name="Läggain_btn" class="Läggain_btn">Lägg in annons</button> <!--Här har vi knappen "Lägg in annons" med typen submit.  --> 
               
        <footer> <!--Footern som finns på alla sidor!--> 
        <p>OldPhone&copy;2018 webbsidan gjord av Eyobed Geda Elias </p>            
        </footer>
    
</div>
</form>
</div> 
</body>
</html>