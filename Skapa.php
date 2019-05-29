<!-- Detta är ett php-och html dokument, där den kopplar ihop med min datbas eyge0001 och kommer att sätta in informationen som besökaren har matat in för att skapa ett konto.
Här sammankopplar den till min databas eyge0001 med localhost,eyge0001,Skolmailen94 och eyge0001.
Här under sätter den in värden/information som besökaren matat in till min databas eyge0001.-->

<?php
$servername = "localhost";
$username = "eyge0001";
$password = "Skolmailen94";
$dbname = "eyge0001";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO Registrera (Adn,Mail,Lsn )
VALUES ('$_POST[Adn]','$_POST[Mail]','$_POST[Lsn]')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 

<!DOCTYPE html> <!--Detta är ett html dokument.Till den sidan man kommer när man fått in värden i databasen.-->
<html>
<head>
 <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/stylesheet.css"> 
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
        
<div id="innehålls_area">
<h1>Du är nu registrerad!</h1><!-- Denna sidan kommer man fram till när man skapat ett konto och är registrerad.  -->
<hr>
    
<h3>Välkommen nya användare, du kan nu logga in!</h3>
<h3><a href="Login.php">Här kan du Logga in! </a></h3>  <!-- Användare/besökare kan nu logga in och är registrerad. -->
</div>
    
<footer>
<p>OldPhone&copy;2018 webbsidan gjord av Eyobed Geda Elias </p>
</footer>
</div>
</body>
</html>