<?php /* Detta är ett php-dokument, där den kopplar ihop med min datbas eyge0001 och kommer att sätta in informationen som besökaren har matat in för att lägga in en annons/telefon/smarttelefon. */
$servername = "localhost";
$username = "eyge0001";
$password = "Skolmailen94";
$dbname = "eyge0001";

$conn = new mysqli($servername, $username, $password, $dbname);/* Här sammankopplar den till min databas eyge0001 med localhost,eyge0001,Skolmailen94 och eyge0001. */
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/* Här under sätter den in värden/information som besökaren matat in till min databas eyge0001. */

$sql = "INSERT INTO Telefon (IMEInummer,Modell,Mrk,Pris,Info )
VALUES ('$_POST[IMEInummer]','$_POST[Modell]','$_POST[Mrk]','$_POST[Pris]','$_POST[Info]')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

<html> <!--Detta är ett html dokument.Till den sidan man kommer när man fått in värden i databasen.  -->
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/stylesheet.css"> 
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
        
<div id="innehålls_area"> 
<h1>Din annons är nu inlämnad!</h1>  <!-- Denna sidan kommer man fram till när man lämnat in sin annons/smartphone/telefon.  -->
<hr>
<h3>Logga in för att se alla inlagda annonser!</h3> <!--Här informeras besökaren/användaren att logga in för att se annonser som är inlagda i systemet/databasen -->
    
<h3>Är du inte registrerad?<a href="Registrera.php">- Här kan du skapa ett konto! </a></h3>   <!--Men för att kunna logga in måste man var registrerad , därav har jag länken till registrerings sidan. -->
<h3>registrerad?<a href="Login.php">- Logga in här! </a></h3>   <!--Men om man redan är registrerad så kan man som användare/besökare bara logga in för att se annonserna. -->
</div>
        
<footer>
<p>OldPhone&copy;2018 webbsidan gjord av Eyobed Geda Elias </p>               
</footer>
</div>
</body>
</html>