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
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action = "Priklad1.php" method="get">
<label>Meno</label>
<br>
<input type="text" name = "meno" placeholder="Zadaj meno">
<br>
<label>Vek</label>
<br>
<input type="text" name = "vek" placeholder="Zadaj vek">
<br>
<button type="submit">Odosli</button>
</form>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_GET['meno']) && isset($_GET['vek'])){
    echo "Volas sa " . htmlspecialchars($_GET['meno']). " a mas " . htmlspecialchars($_GET['vek']) . " rokov";
} else{
    echo "nieco si nezadal";
}




?>
</body>
</html>






    
