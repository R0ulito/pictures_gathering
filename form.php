<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="recup.php" method="post">
    <p>
        <label for="an">Quelle année voulez-vous capturer ?</label><br />
        <select name="an" id="an">
            <option value="10">2010</option>
            <option value="11">2011</option>
            <option value="12">2012</option>
            <option value="13">2013</option>
            <option value="14">2014</option>
            <option value="15">2015</option>
            <option value="16" selected>2016</option>
        </select>
    </p>


    <p>
        <label for="mois">Quel(s) mois voulez vous capturer ?</label><br />
        <select name="mois" id="mois">
            <option value="all">L'année entière</option>
            <option value="jan">Janvier</option>
            <option value="feb">Fevrier</option>
            <option value="mar">Mars</option>
            <option value="apr">Avril</option>
            <option value="may">Miy</option>
            <option value="jun">Juin</option>
            <option value="jul">Juillet</option>
            <option value="aug">Aout</option>
            <option value="sep">Septembre</option>
            <option value="oct">Octobre</option>
            <option value="nov">Novembre</option>
            <option value="dec">Decembre</option>
        </select>
    </p>

    <p>
        <label for="resolution">Quelle résolution voulez-vous sélectionner</label>
        <select name="resolution" id="resolution">
            <option value="200">200</option>
            <option value="240">240</option>
            <option value="360">360</option>
            <option value="480">480</option>
            <option value="3796">3796</option>
            <option value="4096">4096</option>
        </select></p>

    <input type="submit">
</form>

</body>
</html>