<?php
/*
Úloha 5: Vloženie údajov z formulára do databázy cez mysqli

Vytvor formulár na pridanie nového žiaka do tabuľky ziaci.
Používateľ zadá meno a email.
Po odoslaní sa údaje uložia do databázy.

Požiadavky:
- použi metódu POST,
- skontroluj, či sú meno a email vyplnené,
- skontroluj správny formát emailu,
- použi mysqli,
- použi prepared statement,
- použi SQL príkaz INSERT.
*/
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Úloha 5: Vloženie údajov z formulára do databázy cez mysqli</title>
</head>
<body>
    <h1>Úloha 5: Vloženie údajov z formulára do databázy cez mysqli</h1>

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
    <form action="priklad5.php" method="post">
        <label>Meno</label>
        <input type="text" name="meno" placeholder="zadaj meno">
        <br>
        <label>Email</label>
        <input type="email" name="email" placeholder="zadaj mail">
        <button type="submit">Odosli</button>

    </form>
</body>
</html>
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
    $spojenie = mysqli_connect('localhost', 'root', 'root', 'skola');

if(!$spojenie){
    echo "nepripojene";
} else {
    echo "uspesne pripojene";
    echo "<br>";
}
if(!empty($_POST['meno']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $email = $_POST['email'];
    $meno = $_POST['meno'];
$stmt = mysqli_prepare($spojenie,"INSERT INTO ziaci (meno,email) VALUES (?,?)");
mysqli_stmt_bind_param($stmt,"ss",$meno,$email);
mysqli_stmt_execute($stmt);

echo "ziak pridany";
}




?>
</body>
</html>
