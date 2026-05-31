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

</body>
</html>
