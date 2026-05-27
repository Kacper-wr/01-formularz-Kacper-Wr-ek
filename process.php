<?php 
$imie = $_POST['imie'] ?? '';
$nazwisko = $_POST['nazwisko'] ?? '';
$imie = htmlspecialchars($imie);
$nazwisko = htmlspecialchars($nazwisko);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Powitanie</title>
</head>
<body>
    <h1>Witaj, <?= $imie ?> <?= $nazwisko ?>!</h1>
    <p><a href="index.html">« Wróć do formularza</a></p>
</body>
</html>