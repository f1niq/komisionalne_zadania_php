<?php
/*
Úloha 3: Validácia registračného formulára

Vytvor registračný formulár s poľami:
- meno,
- email,
- heslo,
- potvrdenie hesla.

Skontroluj:
- či sú všetky polia vyplnené,
- či má email správny formát,
- či má heslo aspoň 6 znakov,
- či sa heslo a potvrdenie hesla zhodujú.

Požiadavky:
- použi metódu POST,
- chyby ukladaj do poľa,
- email validuj pomocou filter_var(),
- pri výpise chýb použi htmlspecialchars().
*/
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Úloha 3: Validácia registračného formulára</title>
</head>
<body>
    <h1>Úloha 3: Validácia registračného formulára</h1>

    <pre><?php echo htmlspecialchars(file_get_contents(__FILE__)); ?></pre>

    <!-- Sem napíš svoje riešenie. -->

</body>
</html>
