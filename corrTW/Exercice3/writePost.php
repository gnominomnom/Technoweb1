<?php

    function writePost($index) {

        $xml = simplexml_load_file('publications.xml');
        $i = 0;
        $publi = $xml->publication[$index];
        
        echo '<p><i>'.$publi->titre.'</i>, '.$publi->journal.', '.$publi->annee.'</p>';
        echo '<p>';
        foreach ($publi->auteurs->auteur as $auteur) {
            if ($i != 0){
               echo ', ' ;
            }
            echo $auteur;
            $i += 1;
        }
        echo '</p>';
        
    }
?>