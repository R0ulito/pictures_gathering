<?php
//script crée en novembre 2016 pour capturer les photos de l'année 2014
$an = $_POST['an'];
$mois = $_POST['mois'];
$reso = $_POST['resolution'];
$jour = 1;
$str = "0";
$feb = 0;
$format = ".gif";

$moi31 = ["jan", "mar", "may", "jul", "aug", "oct", "dec"];
$moi30 = ["apr", "jun", "sep", "nov"];

if ($mois === 'all') {
    $mois = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
    foreach ($mois as $val) {
        echo $val. " ";
    }
}

function bissextile($annee) {
    if( (is_int($annee/4) && !is_int($annee/100)) || is_int($annee/400)) {
        // l'année  est bissextile
        return 29;
    } else {
        // L'année n'est pas bissextile
        return 28;
    }
}
$feb = bissextile($an);

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

if(!isset($an) || !isset($mois) || !isset($reso)){
    echo 'Au moins une des variables nécessaire n\'a pas été enregistrée';
}

if (isset($an) && isset($mois) && isset($reso)){

    if (in_array($mois, $moi30)) {
        recupMois30();
    }

    if (in_array($mois, $moi31)) {
        while ($jour <= 31) {
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


// Ou est le test si année bissextile ????? Et oui mon p'tit gars février n'a pas tout le temps 28 jours.....
    
    
    if ($mois == 'feb') {
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
    
    if ($mois =='all'){
        
    }
}



//header('location:form.php')

?>