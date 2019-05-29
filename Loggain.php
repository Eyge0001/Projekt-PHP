<?php/* Detta är ett php-dokument, Här har vi  en session för inloggad. Här har vi  en session där den kollar och hämtar ut värden från databasen eyge0001 som matchar med det användaren matar in och skriver vid inloggning .*/
session_start();

$dsn = "mysql:host=localhost;dbname=eyge0001;charset=utf8";
$db = new PDO($dsn, "eyge0001", "Skolmailen94");
if (!isset($_SESSION["Inloggad"]))
{
  header("Location: Login.php");
}
?>

<?php
session_start();
$dsn = "mysql:host=localhost;dbname=eyge0001;charset=utf8";
$db = new PDO($dsn, "eyge0001", "Skolmailen94");


if (isset($_POST["Loggainknapp"]))
{
  $sql = "SELECT * FROM Registrera WHERE Adn = ? AND Lsn = ?;";
  $stmt = $db->prepare($sql);
  $stmt->execute([$_POST["Adn"], $_POST["Lsn"]]);

  if ($row = $stmt->fetch()) 
  {
    $_SESSION["Inloggad"] = $row["Adn"];
  header("Location: read.php");
}
    
}
?>



             