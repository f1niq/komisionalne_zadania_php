<?php
/*
Úloha 10: Prihlásenie používateľa so session cez mysqli

Vytvor prihlasovací formulár.
Používateľ zadá email a heslo.

Program má:
- nájsť používateľa podľa emailu,
- overiť heslo pomocou password_verify(),
- po úspešnom prihlásení uložiť ID a meno používateľa do $_SESSION,
- vypísať správu „Si prihlásený ako ...",
- umožniť používateľovi odhlásiť sa.

Požiadavky:
- použi session_start(),
- použi mysqli,
- použi SELECT,
- použi password_verify(),
- použi $_SESSION,
- vytvor aj odhlasovanie pomocou session_unset() a session_destroy().
*/
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Úloha 10: Prihlásenie používateľa so session cez mysqli</title>
</head>
<body>
    <h1>Úloha 10: Prihlásenie používateľa so session cez mysqli</h1>

    <pre><?php echo htmlspecialchars(file_get_contents(__FILE__)); ?></pre>

    <!-- Sem napíš svoje riešenie. -->

</body>
</html>
