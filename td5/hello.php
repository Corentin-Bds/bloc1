<ul>
    <li>
        <a href="?messages=Salut">Salut</a>
    </li>
    <li>
        <a href="?messages=Hola">Salut en Espagnol</a>
    </li>
    </ul>
<?php

    $messages = $_GET['messages']??"Message par défaut";
    $nb = $_GET['nb']??1;
    $i = 0;
    while($i < $nb) {
        echo "<h1>$messages</h1>";
        $i++;       
    }

?>
