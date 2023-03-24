<?php
   // var_dump($_GET);
    $numero = $_GET["numero"];
    echo "<h1> La tabla del $numero</h1>";

    echo "<table border='1'>";
    for($i=0; $i<=10; $i++){
        $res = $numero * $i;
        echo "<tr>";
            echo "<td>$numero</td>";
            echo "<td>x</td>";
            echo "<td>$i</td>";
            echo "<td>=</td><td>$res</td>";
        echo "</tr>";

    }
    echo "</table>";
?>
