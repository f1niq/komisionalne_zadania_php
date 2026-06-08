<?php
/*
Úloha 4: Pripojenie k databáze a výpis údajov cez mysqli

Vytvor databázu skola a tabuľku ziaci so stĺpcami:
- id,
- meno,
- email.

Napíš PHP skript, ktorý sa pripojí k databáze cez mysqli a vypíše všetkých žiakov z tabuľky.

SQL príprava databázy:

CREATE DATABASE skola CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE skola;

CREATE TABLE ziaci (
    id INT AUTO_INCREMENT PRIMARY KEY,
    meno VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL
);

INSERT INTO ziaci (meno, email) VALUES
('Peter Novák', 'peter@example.com'),
('Jana Malá', 'jana@example.com');

Požiadavky:
- použi mysqli,
- nastav charset utf8mb4,
- použi SELECT,
- vypíš všetky záznamy z tabuľky.
*/
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Úloha 4: Pripojenie k databáze a výpis údajov cez mysqli</title>
</head>
<body>
    <h1>Úloha 4: Pripojenie k databáze a výpis údajov cez mysqli</h1>

    <pre><?php echo htmlspecialchars(file_get_contents(__FILE__)); ?></pre>

    <!-- Sem napíš svoje riešenie. -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$spojenie = mysqli_connect('localhost', 'root', 'root', 'skola');
mysqli_set_charset($spojenie, 'utf8mb4');
if(!$spojenie){
    echo "nepripojene";
} else {
    echo "uspesne pripojene";
    echo "<br>";
}


$vysledok = mysqli_query($spojenie, "SELECT * FROM ziaci");

while($riadok = mysqli_fetch_assoc($vysledok)){
    echo $riadok['meno'] . " - " . $riadok['email'];
    echo "<br>";

}


?>
</body>
</html>

</body>
</html>
