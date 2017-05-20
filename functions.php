<?php
// Découpage du script de récupération en fonction
// Une s'occupera des mois en 31 jours, une autre les mois en 30 jours, et la dernière les mois de février
//


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
            echo $image." TRAITÉE ! <br />";
            //set_time_limit(60);
            $jour++;

        } else {
            $image = "http://spaceweather.com/images20" .$_POST['an']. "/" . $jour . $_POST['mois'] . $_POST['an'] . "/hmi". $_POST['resolution'] . $format;
            echo "<br /> jour " . $jour . " du mois " . $_POST['mois'] . " capté par ".$_POST['resolution']."<br />";
            // $current = file_get_contents($image);
            //$file = $jour.$mois.$an.".gif";
            //file_put_contents($file, $current);
            echo $image." TRAITÉE ! <br />";
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
            echo $image." TRAITÉE ! <br />";
            //set_time_limit(60);
            $jour++;

        } else {
            $image = "http://spaceweather.com/images20" .$_POST['an']. "/" . $jour . $_POST['mois'] . $_POST['an'] . "/hmi". $_POST['resolution'] . $format;
            echo "<br /> jour " . $jour . " du mois " . $_POST['mois'] . " capté par ".$_POST['resolution']."<br />";
            // $current = file_get_contents($image);
            //$file = $jour.$mois.$an.".gif";
            //file_put_contents($file, $current);
            echo $image." TRAITÉE ! <br />";
            //set_time_limit(60);
            $jour++;
        }


    }

}

function recupFeb () {
    while ($jour <= $feb) {
        if ($jour <= 9){
            $image = "http://spaceweather.com/images20" .$an. "/" . $str . $jour . $mois . $an . "/hmi". $reso . $format;
            echo "<br /> jour " . $jour . " du mois " . $mois . " capté par ".$reso."<br />";
            // $current = file_get_contents($image);
            //$file = $str.$jour.$mois.$an.".gif";
            //file_put_contents($file, $current);
            echo $image." TRAITÉE ! <br />";
            //set_time_limit(60);
            $jour++;

        } else {
            $image = "http://spaceweather.com/images20" .$an. "/" .$jour .$mois .$an. "/hmi".$reso. $format;
            echo "<br /> jour " . $jour . " du mois " . $mois . " capté par ".$reso."<br />";
            // $current = file_get_contents($image);
            //$file = $jour.$mois.$an.".gif";
            //file_put_contents($file, $current);
            echo $image." TRAITÉE ! <br />";
            //set_time_limit(60);
            $jour++;
        }


    }
}
