<!DOCTYPE html>
<html>
<head>
    <script src="id_reading.js"></script>
    <title>test</title>
</head>
<body>

<form action="recup.php" method="post">
    <p>
        <label for="an">Quelle année voulez-vous capturer ?</label><br />
        <select name="an" id="an" onchange="yearReading()" required>
            <option value="11" id="11">2011</option>
            <option value="12" id="12">2012</option>
            <option value="13" id="13">2013</option>
            <option value="14" id="14">2014</option>
            <option value="15" id="15">2015</option>
            <option value="16" id="16" selected>2016</option>
        </select>
    </p>
    <div id="majmonth"></div>
    <br />

    <hr>
    <p>
        <label for="mois">Quel(s) mois voulez vous capturer ?</label><br />
        <select name="mois" id="mois" onchange="monthReading()">
            <option value="all" id="all">L'année entière</option>
            <option value="jan" id="jan" selected>Janvier</option>
            <option value="feb" id="feb">Fevrier</option>
            <option value="mar" id="mar">Mars</option>
            <option value="apr" id="apr">Avril</option>
            <option value="may" id="may">Miy</option>
            <option value="jun" id="jun">Juin</option>
            <option value="jul" id="jul">Juillet</option>
            <option value="aug" id="aug">Aout</option>
            <option value="sep" id="sep">Septembre</option>
            <option value="oct" id="oct">Octobre</option>
            <option value="nov" id="nov">Novembre</option>
            <option value="dec" id="dec">Decembre</option>
        </select>
    </p>


    <hr>

    <p>
        <label for="resolution" >Quelle résolution voulez-vous sélectionner</label><br />
        <select name="resolution" id="resolution" onchange="resoReading()">
            <option value="200" id="200">200</option>
            <option value="240" id="240">240</option>
            <option value="360" id="360">360</option>
            <option value="480" id="480">480</option>
            <option value="3796" id="3796">3796</option>
            <option value="4096" id="4096">4096</option>
        </select>
    </p>
    <div id="majreso"></div>
    <div id="warnreso"></div>
    <br />



    <input type="submit">
</form>

<script>
    
</script>
</body>
</html>