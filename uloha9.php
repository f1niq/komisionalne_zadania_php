<?php
/*
Úloha 9: Registrácia používateľa s hashovaním hesla cez mysqli

Vytvor tabuľku pouzivatelia a registračný formulár.
Používateľ zadá meno, email a heslo.
Heslo sa nesmie uložiť ako obyčajný text.
Pred uložením ho zahashuj pomocou password_hash().

SQL príprava tabuľky:

CREATE TABLE pouzivatelia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    meno VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    heslo VARCHAR(255) NOT NULL
);

Požiadavky:
- použi metódu POST,
- validuj meno, email a heslo,
- heslo musí mať aspoň 6 znakov,
- použi password_hash(),
- použi mysqli,
- použi prepared statement,
- použi SQL príkaz INSERT.
*/
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Úloha 9: Registrácia používateľa s hashovaním hesla cez mysqli</title>
</head>
<body>
    <h1>Úloha 9: Registrácia používateľa s hashovaním hesla cez mysqli</h1>

    <pre><?php echo htmlspecialchars(file_get_contents(__FILE__)); ?></pre>

    <!-- Sem napíš svoje riešenie. -->

</body>
</html>
