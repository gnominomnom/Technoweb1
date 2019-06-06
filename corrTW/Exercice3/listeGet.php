<?php

    $xml = simplexml_load_file("publications.xml");
    $i = 0;

    echo '<form action="listeGet.php" method="GET">';
    echo '<select name="select" size="3">';
    foreach ($xml->publication as $publi) {
        echo '<option value="'.$i.'">'.$publi->titre.'</option>';
        $i += 1;
    }
    echo '</select>';
    echo '<input type="submit">';
    echo '</form>';

    require("writeGet.php");

    if (isset($_GET['select'])) {
        writeGet(intval($_GET['select']));
    }



?>