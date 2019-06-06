<?php

    $xml = simplexml_load_file("publications.xml");
    $i = 0;

    echo '<form action="listePost.php" method="POST">';
    echo '<select name="select" size="3">';
    foreach ($xml->publication as $publi) {
        echo '<option value="'.$i.'">'.$publi->titre.'</option>';
        $i += 1;
    }
    echo '</select>';
    echo '<input type="submit">';
    echo '</form>';

    require("writePost.php");

    if (isset($_POST['select'])) {
        writePost(intval($_POST['select']));
    }



?>