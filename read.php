<?php /* Detta är ett php-dokument, Här har vi  en session för när man är inloggad.*/
session_start();

$dsn = "mysql:host=localhost;dbname=eyge0001;charset=utf8";
$db = new PDO($dsn, "eyge0001", "Skolmailen94");
if (!isset($_SESSION["Inloggad"]))
{
  header("Location: Login.php");
}

?>

<html><!--Detta är ett html dokument. Denna sidan visas när besökaren/ användaren är inloggad och hen kan då se alla inlagda annonser som finns i databasen.-->
<head>
 <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/stylesheet.css"> <!--Här länkas stilen som används för min webbsida, det är en text/CSS. -->
<link rel="stylesheet" type="text/css" href="Loggaut.php"> 
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
<li><a href="Loggaut.php">Logga ut</a></li>
<li><a href="omoss.php">Om oss</a></li>
</ul>
</nav>
    
<div id="innehålls_area">
<h1>Du är nu inloggad!</h1>
<hr>
    
<h3>Här kan man se annonser från OldPhones databas </h3>
            

<html>
<body>

<?php /* Detta är ett php-dokument, Här hämtas och visas alla inlagda annonser/telefoner/smartphones från databasen eyge0001*/
$servername = "localhost";
$username = "eyge0001";
$password = "Skolmailen94";
$dbname = "eyge0001";


$conn = new mysqli($servername, $username, $password, $dbname);/* sammankopplar till databasen eyge0001.*/

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);/* Om det inte sammankopplar så "dör" sammankopplingen.*/
} 

$sql = "SELECT * FROM Telefon";/* Hämtar all information eller alla värden(tabeller,tabelldata,rader osv) från databasen eyge0001.*/
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr>
    <th>IMEInummer</th>
    <th>Modell</th>
    <th>Mrk</th>
    <th>Pris</th>
    <th>Info</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["IMEInummer"]. "</td><td>" . $row["Modell"]. "</td><td>" .  $row["Mrk"]. "</td><td>". $row["Pris"]. "</td><td>". $row["Info"]. "<tr><td>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 
    
<footer>
<p>OldPhone&copy;2018 webbsidan gjord av Eyobed Geda Elias </p>
</footer>
    
</body>
</html>
 