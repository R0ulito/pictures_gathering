
function yearReading(){
    var div = document.getElementById('majreso'),
        ySelect = document.getElementById('an'),
        yValeur = parseInt(ySelect.options[ySelect.selectedIndex].value);

    if ( yValeur <= 13) {
        var resoTab = ['360', '480', '3796'];
        for (var i = 0; i < resoTab.length; i++){
            document.getElementById(resoTab[i]).setAttribute('disabled', true);
        }

        div.innerText = 'L\'année choisie ne permet pas la sélection des résolutions : 360, 480, et 3796';
        //jQuery !!!! I miss you !!!
        //
        // I miss you no more !!! I love cssText instead !!!
        div.style.cssText = "background-color: #F00; padding: 3px; margin: 1px; width: 300px;"
    } else if ( yValeur > 13){
        var resoTab = ['360', '480', '3796'];
        for (var i = 0; i < resoTab.length; i++){
            document.getElementById(resoTab[i]).removeAttribute('disabled');
        }

        div.innerText = '';
        div.style.cssText = "background-color : #000; padding: 0px";
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
        div.style.cssText = "background-color: #F00; padding: 3px; margin: 1px; width: 300px;"


    } else {
        document.getElementById('13').removeAttribute('disabled');
        div.innerText='';
        div.style.cssText = "background-color : #000; padding: 0px";
    }
};

function resoReading() {
    var div = document.getElementById('warnreso'),
        rSelect = document.getElementById('resolution'),
        rValeur = rSelect.options[rSelect.selectedIndex].value;
    if (rValeur === 3796 || rValeur === '4096_blank'){
        div.innerText = "Attention la résolution choisie entraine le téléchargement d'images volumineuses";
        div.style.cssText = "background-color: #F00; padding: 3px; margin: 1px; width: 300px;"

    } else {
        div.innerText = "";
        div.style.cssText = "background-color : #000; padding: 0px";

    }
    
};