<?php
// Découpage du script de récupération en fonction
// Une s'occupera des mois en 31 jours, une autre les mois en 30 jours, et la dernière les mois de février
//

function bissextile($annee) {
    if( (is_int($annee/4) && !is_int($annee/100)) || is_int($annee/400)) {
        // l'année  est bissextile
        return 29;
    } else {
        // L'année n'est pas bissextile
        return 28;
    }
}

function recupMois30(){
    $format = ".gif";
    if($_POST['resolution'] == '4096_blank') {
        $format = ".jpg";

    }
    $str = 0;
    $jour = 1;
    while ($jour <= 30) {
        if ($jour <= 9){
            $image = "http://spaceweather.com/images20" .$_POST['an']. "/" . $str . $jour . $_POST['mois'] . $_POST['an'] . "/hmi". $_POST['resolution'] . $format;
            echo "<br /> jour " . $jour . " du mois " . $_POST['mois'] . " capté par ".$_POST['resolution']."<br />";
            // $current = file_get_contents($image);
            //$file = $str.$jour.$mois.$an.".gif";
            //file_put_contents($file, $current);
            echo "<a href=$image>" .$image. "</a> TRAITÉE ! <br />";
            //set_time_limit(60);
            $jour++;

        } else {
            $image = "http://spaceweather.com/images20" .$_POST['an']. "/" . $jour . $_POST['mois'] . $_POST['an'] . "/hmi". $_POST['resolution'] . $format;
            echo "<br /> jour " . $jour . " du mois " . $_POST['mois'] . " capté par ".$_POST['resolution']."<br />";
            // $current = file_get_contents($image);
            //$file = $jour.$mois.$an.".gif";
            //file_put_contents($file, $current);
            echo "<a href=$image>" .$image. "</a> TRAITÉE ! <br />";
            //set_time_limit(60);
            $jour++;
        }


    }

}

function recupMois31(){
    $format = ".gif";
    if($_POST['resolution'] == '4096_blank') {
        $format = ".jpg";

    }
    $str = 0;
    $jour = 1;
    while ($jour <= 31) {
        if ($jour <= 9){
            $image = "http://spaceweather.com/images20" .$_POST['an']. "/" . $str . $jour . $_POST['mois'] . $_POST['an'] . "/hmi". $_POST['resolution'] . $format;
            echo "<br /> jour " . $jour . " du mois " . $_POST['mois'] . " capté par ".$_POST['resolution']."<br />";
            // $current = file_get_contents($image);
            //$file = $str.$jour.$mois.$an.".gif";
            //file_put_contents($file, $current);
            echo "<a href=$image>" .$image. "</a> TRAITÉE ! <br />";
            //set_time_limit(60);
            $jour++;

        } else {
            $image = "http://spaceweather.com/images20" .$_POST['an']. "/" . $jour . $_POST['mois'] . $_POST['an'] . "/hmi". $_POST['resolution'] . $format;
            echo "<br /> jour " . $jour . " du mois " . $_POST['mois'] . " capté par ".$_POST['resolution']."<br />";
            // $current = file_get_contents($image);
            //$file = $jour.$mois.$an.".gif";
            //file_put_contents($file, $current);
            echo "<a href=$image>" .$image. "</a> TRAITÉE ! <br />";
            //set_time_limit(60);
            $jour++;
        }


    }

}

function recupFeb () {
    $feb = bissextile($_POST['an']);
    $format = ".gif";
    if($_POST['resolution'] == '4096_blank') {
        $format = ".jpg";

    }
    $str = 0;
    $jour = 1;
    while ($jour <= $feb) {
        if ($jour <= 9){
            $image = "http://spaceweather.com/images20" .$_POST['an']. "/" . $str . $jour . $_POST['mois'] . $_POST['an'] . "/hmi". $_POST['resolution'] . $format;
            echo "<br /> jour " . $jour . " du mois " . $_POST['mois'] . " capté par ".$_POST['resolution']."<br />";
            // $current = file_get_contents($image);
            //$file = $str.$jour.$mois.$an.".gif";
            //file_put_contents($file, $current);
            echo "<a href=$image>" .$image. "</a> TRAITÉE ! <br />";
            //set_time_limit(60);
            $jour++;

        } else {
            $image = "http://spaceweather.com/images20" .$_POST['an']. "/" . $jour . $_POST['mois'] . $_POST['an'] . "/hmi". $_POST['resolution'] . $format;
            echo "<br /> jour " . $jour . " du mois " . $_POST['mois'] . " capté par ".$_POST['resolution']."<br />";
            // $current = file_get_contents($image);
            //$file = $jour.$mois.$an.".gif";
            //file_put_contents($file, $current);
            echo "<a href=$image>" .$image. "</a> TRAITÉE ! <br />";
            //set_time_limit(60);
            $jour++;
        }


    }
}
