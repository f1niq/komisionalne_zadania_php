<?php
/*
Úloha 1: Spracovanie formulára metódou GET

Vytvor HTML formulár, v ktorom používateľ zadá svoje meno a vek.
Formulár odošli metódou GET.

Po odoslaní vypíš vetu v tvare:
„Voláš sa Peter a máš 18 rokov."

Ak niektoré pole nie je vyplnené, vypíš chybovú hlášku.

Požiadavky:
- použi formulár s method="GET",
- použi premennú $_GET,
- ošetri prázdne vstupy,
- pri výpise použi htmlspecialchars().
*/
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Úloha 1: Spracovanie formulára metódou GET</title>
</head>
<body>
    <h1>Úloha 1: Spracovanie formulára metódou GET</h1>

    <pre><?php echo htmlspecialchars(file_get_contents(__FILE__)); ?></pre>

    <!-- Sem napíš svoje riešenie. -->

</body>
</html>
