<?php
/*
Úloha 2: Spracovanie formulára metódou POST

Vytvor prihlasovací formulár s poľami email a heslo.
Formulár odošli metódou POST.

Skontroluj, či používateľ vyplnil obe polia.
Ak áno, vypíš správu:
„Formulár bol úspešne odoslaný."

Ak nie, vypíš chybové hlásenie.

Požiadavky:
- použi formulár s method="POST",
- použi premennú $_POST,
- použi $_SERVER["REQUEST_METHOD"],
- skontroluj povinné polia.
*/
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Úloha 2: Spracovanie formulára metódou POST</title>
</head>
<body>
    <h1>Úloha 2: Spracovanie formulára metódou POST</h1>

    <pre><?php echo htmlspecialchars(file_get_contents(__FILE__)); ?></pre>

    <!-- Sem napíš svoje riešenie. -->
    <form action="Priklad2.php" method="post">
    <label>email</label>
    <input type="email" name="email" placeholder="Zadaj mail">
    <label>Heslo</label>
    <input type="password" name="heslo" placeholder="Zadaj heslo">
    <button type="submit">Odosli</button>
    </form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['email']) && !empty($_POST['heslo'])){
                echo "uspesne poslany";
        }   else{
                echo "nevyplnil si vsetko";
        
    }
} else{
    echo "neposlal sa";
}
?>
