<?php
    echo '<TABLE border="1" align="left">';
    for ($i = 1 ; $i <= 9 ; $i++) {
        echo '<TR>';
        for ($j = 1 ; $j <= 9 ;$j++) {
            echo '<TD>' . $i * $j . '</TD>';
        }
        echo '</TR>';
    }
    echo '</TABLE>';
?>