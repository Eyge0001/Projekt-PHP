<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/stylesheet.css"> <!--Här länkas stilen som används för min webbsida, det är en text/CSS. -->
<link rel="stylesheet" type="text/css" href="Loggain.php"> 
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
        
<form method="post" action="Loggain.php"><!-- Här har vi ett formulär för besökaren att fylla i när man ska logga in på webbsidan, som skickar all information vidare till en annan sida som heter "Loggain.php", där jag har php som sammankopplar med databasen eyge0001 och Hämtar värden från databasen eyge0001 som fylls in av besökaren och ser om det matchar. --> 
<div class="container">

<h1>Logga in dig på ditt konto</h1>
<h3>Annonserna visas när du är inloggad OldPhone's hemsida</h3>
<hr>
 <label for="Adn"><!--Adn står för Användarnamn(förkortning) och finns med i min databas eyge0001 och det är typen text då man vill se vad man skriver.--> 
 <b>Avändarnamn</b></label>
<input type="text" placeholder="Fyll i ett användarnamn" 
name="Adn" required>
               
<label for="Lsn"><!--Lsn står för Lösenord(förkortning) och finns med i min databas eyge0001 och det är typen password då man inte vill att det ska synas öppet för alla vad man skriver<!--Adn står för Användarnamn(förkortning) och finns med i min databas eyge0001.-->
<b>Lösenord</b></label>
<input type="password" placeholder="Fyll i ditt lösenord" 
 name="Lsn" required>
    
<button type="submit" name="Loggainknapp">Logga in</button><!--Knappen "Logga in" med typen submit .--> 
               
<div class="container signin">
<p> Är du inte registrerad ? <a href="Registrera.php"> Här kan du registrera dig</a>.</p><!--Här har vi en länk som tar dig till registrera dig  om man nu inte registrerat sig och råkat komma till sidan logga in--> 
</div>

<footer>
<p>OldPhone&copy;2018 webbsidan gjord av Eyobed Geda Elias </p>
</footer>
</div>
</form>
</div>
</body>
</html>