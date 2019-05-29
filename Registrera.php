<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/stylesheet.css"> <!--Här länkas stilen som används för min webbsida, det är en text/CSS. -->
<link rel="stylesheet" type="text/css" href="Skapa.php"> 

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
        
<form method="post" action="Skapa.php"><!-- Här har vi ett formulär för besökaren att fylla som skapar ett konto/registrerar, som skickar all information vidare till en annan sida som heter "skapa.php", där jag har php som sammankopplar med databasen eyge0001 och lägger in dessa värden som fylls in av besökaren och det kommer då in till databasen eyge0001. --> 
<div class="container">
<h1>Registrera dig på OldPhone</h1><!--Rubriker på denna sida. --> 
<h3>Registrera dig för att se annonserna på OldPhone's hemsida</h3>
<hr>

<label for="Adn"><!--Adn står för Användarnamn(förkortning) och finns med i min databas eyge0001 och det är typen text då man vill se vad man skriver.--> 
<b>Avändarnamn</b></label>
<input type="text" placeholder="Fyll i ett användarnamn" 
name="Adn" required>
               
<label for="Mail">
<b>Mail</b></label>
<input type="text" placeholder="Fyll i din mail" 
 name="Mail" required>
    
<label for="Lsn"><!--Lsn står för Lösenord(förkortning) och finns med i min databas eyge0001 och det är typen password då man inte vill att det ska synas öppet för alla vad man skriver<!--Adn står för Användarnamn(förkortning) och finns med i min databas eyge0001.--> 
<b>Lösenord</b></label>
<input type="password" placeholder="Fyll i ditt lösenord" 
name="Lsn" required>
               
<button type="submit" name="Läggain_btn" class="Läggain_btn" >Registrera dig</button><!--Knappen "registrera dig" med typen submit .--> 
            
<footer>
<p>OldPhone&copy;2018 webbsidan gjord av Eyobed Geda Elias </p>
</footer>

</div>
</form>
</div>   
</body>
</html>