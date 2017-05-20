<?php
//script crée en novembre 2016 pour capturer les photos de l'année 2014
$an = $_POST['an'];
$mois = $_POST['mois'];
$reso = $_POST['resolution'];
$jour = 1;
$str = "0";
echo "" . $an . $mois . $reso . "";

$moi31 = ["jan", "mar", "may", "jul", "aug", "oct", "dec"];
$moi30 = ["apr", "jun", "sep", "nov"];

/*if ($an == 14)
{
    if (in_array($mois, $moi31))
    {
        if (in_array($mois, $blank)) {


            while ($jour <= 31)
            {
                if ($mois == "may" and $jour >= 26)
                {
                    $image = "http://spaceweather.com/images20" .$an. "/" .$jour .$mois .$an. "/hmi1898.gif";
                    //echo "<br /> jour" . $jour . "du mois " . $mois . " capté par 1898";
                    $current = file_get_contents($image);
                    $file = $jour.$mois.$an.".gif";
                    file_put_contents($file, $current);
                    echo $image." TRAITÉE ! <br />";
                    set_time_limit(60);
                    $jour++;
                }

                elseif ($mois =="jan" and $jour <=7)
                {
                    $image = "http://spaceweather.com/images20" .$an. "/" .$str.$jour .$mois .$an. "/hmi3796.gif";
                    //echo "<br /> jour" . $str . $jour . "du mois" . $mois . " capté par 3796";
                    $current = file_get_contents($image);
                    $file = $jour.$mois.$an.".gif";
                    file_put_contents($file, $current);
                    echo $image." TRAITÉE ! <br />";
                    set_time_limit(60);
                    $jour++;
                }
                elseif ($jour <= 9)
                {
                    $image = "http://spaceweather.com/images20" .$an. "/" .$str.$jour .$mois .$an. "/hmi4096_blank.jpg";
                    //echo "<br /> jour" . $str . $jour . "du mois" . $mois . " capté par 4096";
                    $current = file_get_contents($image);
                    $file = $jour.$mois.$an.".gif";
                    file_put_contents($file, $current);
                    echo $image." TRAITÉE ! <br />";
                    set_time_limit(60);
                    $jour++;
                }

                elseif ($jour >= 10)
                {
                    $image = "http://spaceweather.com/images20" .$an. "/" .$jour .$mois .$an. "/hmi4096_blank.jpg";
                    //echo "<br /> jour" . $jour . "du mois " . $mois . " capté par 4096";
                    $current = file_get_contents($image);
                    $file = $jour.$mois.$an.".gif";
                    file_put_contents($file, $current);
                    echo $image." TRAITÉE ! <br />";
                    set_time_limit(60);
                    $jour++;
                }

            }

        }

        if (in_array($mois, $hmi1898)) {


            while ($jour <= 31)
            {
                if ($jour <= 9)
                {
                    $image = "http://spaceweather.com/images20" .$an. "/" .$str.$jour .$mois .$an. "/hmi1898.gif";
                    //echo "<br /> jour" . $str . $jour . "du mois" . $mois . " capté par 1898";
                    $current = file_get_contents($image);
                    $file = $jour.$mois.$an.".gif";
                    file_put_contents($file, $current);
                    echo $image." TRAITÉE ! <br />";
                    set_time_limit(60);
                    $jour++;
                }

                elseif ($jour >= 10)
                {
                    $image = "http://spaceweather.com/images20" .$an. "/" .$jour .$mois .$an. "/hmi1898.gif";
                    //echo "<br /> jour" . $jour . "du mois " . $mois . " capté par 1898";
                    $current = file_get_contents($image);
                    $file = $jour.$mois.$an.".gif";
                    file_put_contents($file, $current);
                    echo $image." TRAITÉE ! <br />";
                    set_time_limit(60);
                    $jour++;
                }

            }

        }
    }

    elseif (in_array($mois, $moi30))
    {
        if (in_array($mois, $blank)) {


            while ($jour <= 30)
            {
                if ($jour <= 9)
                {
                    $image = "http://spaceweather.com/images20" .$an. "/" .$str.$jour .$mois .$an. "/hmi4096_blank.jpg";
                    //echo "<br /> jour" . $str . $jour . "du mois" . $mois . " capté par 4096";
                    $current = file_get_contents($image);
                    $file = $jour.$mois.$an.".gif";
                    file_put_contents($file, $current);
                    echo $image." TRAITÉE ! <br />";
                    set_time_limit(60);
                    $jour++;
                }

                elseif ($jour >= 10)
                {
                    $image = "http://spaceweather.com/images20" .$an. "/" .$jour .$mois .$an. "/hmi4096_blank.jpg";
                    //echo "<br /> jour" . $jour . "du mois " . $mois . " capté par 4096";
                    $current = file_get_contents($image);
                    $file = $jour.$mois.$an.".gif";
                    file_put_contents($file, $current);
                    echo $image." TRAITÉE ! <br />";
                    set_time_limit(60);
                    $jour++;
                }

            }

        }
        if (in_array($mois, $hmi1898)) {


            while ($jour <= 30)
            {
                if ($jour <= 9)
                {
                    $image = "http://spaceweather.com/images20" .$an. "/" .$str.$jour .$mois .$an. "/hmi1898.gif";
                    //echo "<br /> jour " . $str . $jour . " du mois " . $mois . " capté par 1898";
                    $current = file_get_contents($image);
                    $file = $jour.$mois.$an.".gif";
                    file_put_contents($file, $current);
                    echo $image." TRAITÉE ! <br />";
                    set_time_limit(60);
                    $jour++;
                }

                elseif ($jour >= 10)
                {
                    $image = "http://spaceweather.com/images20" .$an. "/" .$jour .$mois .$an. "/hmi1898.gif";
                    //echo "<br /> jour " . $jour . " du mois " . $mois . " capté par 1898";
                    $current = file_get_contents($image);
                    $file = $jour.$mois.$an.".gif";
                    file_put_contents($file, $current);
                    echo $image." TRAITÉE ! <br />";
                    set_time_limit(60);
                    $jour++;
                }

            }

        }

    }

    elseif ($mois == "feb")
    {
        while ($jour <= 28 )
            if ($jour <= 9)
            {
                $image = "http://spaceweather.com/images20" .$an. "/" .$str.$jour .$mois .$an. "/hmi4096_blank.jpg";
                //echo "<br /> jour" . $str . $jour . "du mois" . $mois . " capté par 4096";
                $current = file_get_contents($image);
                $file = $jour.$mois.$an.".gif";
                file_put_contents($file, $current);
                echo $image." TRAITÉE ! <br />";
                set_time_limit(60);
                $jour++;
            }

            elseif ($jour >= 10)
            {
                $image = "http://spaceweather.com/images20" .$an. "/" .$jour .$mois .$an. "/hmi4096_blank.jpg";
                //echo "<br /> jour" . $jour . "du mois " . $mois . " capté par 4096";
                $current = file_get_contents($image);
                $file = $jour.$mois.$an.".gif";
                file_put_contents($file, $current);
                echo $image." TRAITÉE ! <br />";
                set_time_limit(60);
                $jour++;
            }
    }
}

elseif ($an >= 15 )
{
    if (in_array($mois, $moi31))
    {
        while ($jour <= 31)
        {
            if ($jour <= 9)
            {
                echo "<br /> jour " . $str . $jour . " du mois " . $mois . " capté par 1898";
                $jour++;
            }

            elseif ($jour >= 10)
            {
                echo "<br /> jour " . $jour . " du mois " . $mois . " capté par 1898";
                $jour++;
            }

        }
    }

    elseif (in_array($mois, $moi30))
    {
        while ($jour <= 30)
        {
            if ($jour <= 9)
            {
                $image = "http://spaceweather.com/images20" .$str .$an. "/" .$jour .$mois .$an. "/hmi1898.gif";
                //echo "<br /> jour" . $jour . "du mois " . $mois . " capté par 1898";
                $current = file_get_contents($image);
                $file = $jour.$mois.$an.".gif";
                file_put_contents($file, $current);
                echo $image." TRAITÉE ! <br />";
                set_time_limit(60);
                $jour++;
            }

            elseif ($jour >= 10)
            {
                $image = "http://spaceweather.com/images20" .$an. "/" .$jour .$mois .$an. "/hmi1898.gif";
                //echo "<br /> jour" . $jour . "du mois " . $mois . " capté par 1898";
                $current = file_get_contents($image);
                $file = $jour.$mois.$an.".gif";
                file_put_contents($file, $current);
                echo $image." TRAITÉE ! <br />";
                set_time_limit(60);
                $jour++;
            }

        }
    }
    
    elseif ($mois == "feb")
    {
        while ($jour <= 28 )
        {
            if ($jour <= 9)
            {
                $image = "http://spaceweather.com/images20" .$str .$an. "/" .$jour .$mois .$an. "/hmi1898.gif";
                //echo "<br /> jour" . $jour . "du mois " . $mois . " capté par 1898";
                $current = file_get_contents($image);
                $file = $jour.$mois.$an.".gif";
                file_put_contents($file, $current);
                echo $image." TRAITÉE ! <br />";
                set_time_limit(60);
                $jour++;
            }

            elseif ($jour >= 10)
            {
                $image = "http://spaceweather.com/images20" .$an. "/" .$jour .$mois .$an. "/hmi1898.gif";
                //echo "<br /> jour" . $jour . "du mois " . $mois . " capté par 1898";
                $current = file_get_contents($image);
                $file = $jour.$mois.$an.".gif";
                file_put_contents($file, $current);
                echo $image." TRAITÉE ! <br />";
                set_time_limit(60);
                $jour++;
            }

        }
    }
}*/

if(!isset($an) || !isset($mois) || !isset($reso)){
    echo 'Au moins une des variables nécessaire n\'a pas été enregistrée';
}

if (isset($an) && isset($mois) && isset($reso)){
    if (in_array($mois, $moi30)) {
        while ($jour <= 30) {
            if ($jour <= 9){
                $image = "http://spaceweather.com/images20" .$an. "/" . $str . $jour . $mois . $an . "/hmi". $reso . ".gif";
                echo "<br /> jour" . $jour . "du mois " . $mois . " capté par ".$reso."<br />";
                // $current = file_get_contents($image);
                //$file = $jour.$mois.$an.".gif";
                //file_put_contents($file, $current);
                echo $image." TRAITÉE ! <br />";
                //set_time_limit(60);
                $jour++;

            } else {
                $image = "http://spaceweather.com/images20" .$an. "/" .$jour .$mois .$an. "/hmi".$reso.".gif";
                echo "<br /> jour" . $jour . "du mois " . $mois . " capté par ".$reso."<br />";
                // $current = file_get_contents($image);
                //$file = $jour.$mois.$an.".gif";
                //file_put_contents($file, $current);
                echo $image." TRAITÉE ! <br />";
                //set_time_limit(60);
                $jour++;
            }


        }
    }
}



//header('location:form.php')

?>