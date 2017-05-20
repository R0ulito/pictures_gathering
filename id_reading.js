function yearReading(){
    var div = document.getElementById('majreso'),
        ySelect = document.getElementById('an'),
        yValeur = parseInt(ySelect.options[ySelect.selectedIndex].value);

    if ( yValeur <= 13) {
        var resoTab = ['360', '480', '3796'];
        for (var i = 0; i < resoTab.length; i++){
            document.getElementById(resoTab[i]).setAttribute('disabled', true);
            div.innerText = 'L\'année choisie ne permet pas la sélection des résolutions : 360, 480, et 3796';
            div.style.backgroundColor = '#F00';
            div.style.padding = '3px';
        }
    } else if ( yValeur > 13){
        var resoTab = ['360', '480', '3796'];
        for (var i = 0; i < resoTab.length; i++){
            document.getElementById(resoTab[i]).removeAttribute('disabled');
            div.innerText = '';
            div.style.backgroundColor = '#000';
            div.style.padding = '0px';
        }
    };

};

function monthReading() {
    var div = document.getElementById('majmonth'),
        mSelect = document.getElementById('mois'),
        mValeur = mSelect.options[mSelect.selectedIndex].value,
        ySelect = document.getElementById('13'),
        yTest = ySelect.getAttribute('selected');
    console.log(yTest);

    if (mValeur === 'all') {
        document.getElementById('13').setAttribute('disabled', true);
        div.innerText = "Choisir cette option ne permet plus de sélectionner l'année 2013";
        div.style.backgroundColor = '#F00';
        div.style.padding = '3px';


    } else {
        document.getElementById('13').removeAttribute('disabled');
        div.innerText='';
        div.style.backgroundColor = '#000';
        div.style.padding = '0px';
    }
};

function resoReading() {
    var div = document.getElementById('warnreso'),
        rSelect = document.getElementById('resolution'),
        rValeur = parseInt(rSelect.options[rSelect.selectedIndex].value);
    console.log(rValeur);
    if (rValeur === 3796 || rValeur === 4096){
        div.innerText = "Attention la résolution choisie entraine le téléchargement d'images volumineuses";
        div.style.backgroundColor = '#F00';
        div.style.padding = '3px';

    } else {
        div.innerText = "";
        div.style.backgroundColor = '#000';
        div.style.padding = '0px';

    }
    
};