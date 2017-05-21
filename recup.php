<?php
//script crée en novembre 2016 pour capturer les photos de l'année 2014
require_once ('functions.php');
$an = $_POST['an'];
$mois = $_POST['mois'];
$reso = $_POST['resolution'];
$feb = 0;


$moi31 = ["jan", "mar", "may", "jul", "aug", "oct", "dec"];
$moi30 = ["apr", "jun", "sep", "nov"];




if(!isset($an) || !isset($mois) || !isset($reso)){
    echo 'Au moins une des variables nécessaire n\'a pas été enregistrée';
}

if (isset($an) && isset($mois) && isset($reso)){

    if (in_array($mois, $moi30)) {
        recupMois30();
    }

    else if (in_array($mois, $moi31)) {
        recupMois31();
    }

// Ou est le test si année bissextile ????? Et oui mon p'tit gars février n'a pas tout le temps 28 jours.....
    
    
     else if ($mois == 'feb') {
        recupFeb();

    }

    if ($mois === 'all') {
        $mois = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
        foreach ($mois as $val) {
            if (in_array($val, $moi30)) {
                    $format = ".gif";
                    if($_POST['resolution'] == '4096_blank') {
                        $format = ".jpg";

                    }
                    $str = 0;
                    $jour = 1;
                    while ($jour <= 30) {
                        if ($jour <= 9){
                            $image = "http://spaceweather.com/images20" .$_POST['an']. "/" . $str . $jour . $val . $_POST['an'] . "/hmi". $_POST['resolution'] . $format;
                            echo "<br /> jour " . $jour . " du mois " . $val . " capté par ".$_POST['resolution']."<br />";
                            // $current = file_get_contents($image);
                            //$file = $str.$jour.$mois.$an.".gif";
                            //file_put_contents($file, $current);
                            echo "<a href=$image>" .$image. "</a> TRAITÉE ! <br />";
                            //set_time_limit(60);
                            $jour++;

                        } else {
                            $image = "http://spaceweather.com/images20" .$_POST['an']. "/" . $jour . $val . $_POST['an'] . "/hmi". $_POST['resolution'] . $format;
                            echo "<br /> jour " . $jour . " du mois " . $val . " capté par ".$_POST['resolution']."<br />";
                            // $current = file_get_contents($image);
                            //$file = $jour.$mois.$an.".gif";
                            //file_put_contents($file, $current);
                            echo "<a href=$image>" .$image. "</a> TRAITÉE ! <br />";
                            //set_time_limit(60);
                            $jour++;
                        }


                    }


            } else if (in_array($val, $moi31)) {
                $format = ".gif";
                if($_POST['resolution'] == '4096_blank') {
                    $format = ".jpg";

                }
                $str = 0;
                $jour = 1;
                while ($jour <= 31) {
                    if ($jour <= 9){
                        $image = "http://spaceweather.com/images20" .$_POST['an']. "/" . $str . $jour . $val . $_POST['an'] . "/hmi". $_POST['resolution'] . $format;
                        echo "<br /> jour " . $jour . " du mois " . $val . " capté par ".$_POST['resolution']."<br />";
                        // $current = file_get_contents($image);
                        //$file = $str.$jour.$mois.$an.".gif";
                        //file_put_contents($file, $current);
                        echo "<a href=$image>" .$image. "</a> TRAITÉE ! <br />";
                        //set_time_limit(60);
                        $jour++;

                    } else {
                        $image = "http://spaceweather.com/images20" .$_POST['an']. "/" . $jour . $val . $_POST['an'] . "/hmi". $_POST['resolution'] . $format;
                        echo "<br /> jour " . $jour . " du mois " . $val . " capté par ".$_POST['resolution']."<br />";
                        // $current = file_get_contents($image);
                        //$file = $jour.$mois.$an.".gif";
                        //file_put_contents($file, $current);
                        echo "<a href=$image>" .$image. "</a> TRAITÉE ! <br />";
                        //set_time_limit(60);
                        $jour++;
                    }


                }
            } else {

                $feb = bissextile($_POST['an']);
                $format = ".gif";
                if($_POST['resolution'] == '4096_blank') {
                    $format = ".jpg";

                }
                $str = 0;
                $jour = 1;
                while ($jour <= $feb) {
                    if ($jour <= 9){
                        $image = "http://spaceweather.com/images20" .$_POST['an']. "/" . $str . $jour . $val . $_POST['an'] . "/hmi". $_POST['resolution'] . $format;
                        echo "<br /> jour " . $jour . " du mois " . $val . " capté par ".$_POST['resolution']."<br />";
                        // $current = file_get_contents($image);
                        //$file = $str.$jour.$mois.$an.".gif";
                        //file_put_contents($file, $current);
                        echo "<a href=$image>" .$image. "</a> TRAITÉE ! <br />";
                        //set_time_limit(60);
                        $jour++;

                    } else {
                        $image = "http://spaceweather.com/images20" .$_POST['an']. "/" . $jour . $val . $_POST['an'] . "/hmi". $_POST['resolution'] . $format;
                        echo "<br /> jour " . $jour . " du mois " . $val . " capté par ".$_POST['resolution']."<br />";
                        // $current = file_get_contents($image);
                        //$file = $jour.$mois.$an.".gif";
                        //file_put_contents($file, $current);
                        echo "<a href=$image>" .$image. "</a> TRAITÉE ! <br />";
                        //set_time_limit(60);
                        $jour++;
                    }


                }

            }
        }
    }
}



//header('location:form.php')

?>