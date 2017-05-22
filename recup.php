<!--<style>
    .monthodd {
        background-color: yellow;
    }
    .montheven{
        background-color: aquamarine;
    }
</style>-->

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
        $_POST['mois'] = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
        recupAll();
    }
}



//header('location:form.php')

?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var odd = document.getElementsByClassName('odd'),
            even = document.getElementsByClassName('even');
        console.log(even);
        console.log(odd);
        for (var i = 0; i < odd.length; i++){
            odd[i].style.backgroundColor = 'LemonChiffon';
            odd[i].style.margin = '2px 0px';
        }

        //
        for (var j = 0; j < even.length; j++){
            even[j].style.backgroundColor = 'PaleTurquoise';
            even[j].style.margin = '2px 0px';
        }
    });


</script>
