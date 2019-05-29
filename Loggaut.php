<!-- Detta är ett php-dokument, Här är det en session för utloggning, om användaren vill logga ut så klickar man på "Logga ut" i menyn(navigationen) och efter man loggats ut kommer man tillbaka till "Logga in" sidan.-->
<?php
session_start();
unset($_SESSION['Adn']);
session_destroy();
header("Location: Login.php");
exit;
?>