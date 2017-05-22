
function yearReading(){
    var div = document.getElementById('majreso'),
        ySelect = document.getElementById('an'),
        yValeur = parseInt(ySelect.options[ySelect.selectedIndex].value);

    switch (yValeur){
        case 11 :
        case 12 :
        case 13 :
            var resoTab = ['360', '480', '3796'];
            for (var i = 0; i < resoTab.length; i++){
                document.getElementById(resoTab[i]).setAttribute('disabled', true);
            }

            div.innerText = 'L\'année choisie ne permet pas la sélection des résolutions : 360, 480, et 3796';
            //jQuery !!!! I miss you !!!
            // I don't miss you anymore !!! I love cssText instead !!!
            div.style.cssText = "background-color: #F00; padding: 3px; margin: 1px; width: 300px;";
            break;

        default :
            var resoTab = ['360', '480', '3796'];
            for (var i = 0; i < resoTab.length; i++){
                document.getElementById(resoTab[i]).removeAttribute('disabled');
            }

            div.innerText = '';
            div.style.cssText = "background-color : #000; padding: 0px";
            break;


    }

};

function monthReading() {
    var div = document.getElementById('majmonth'),
        mSelect = document.getElementById('mois'),
        mValeur = mSelect.options[mSelect.selectedIndex].value,
        ySelect = document.getElementById('13');

    switch (mValeur) {
        case 'all':
            ySelect.setAttribute('disabled', true);
            div.innerText = "Choisir cette option ne permet plus de sélectionner l'année 2013";
            div.style.cssText = "background-color: #F00; padding: 3px; margin: 1px; width: 300px;";
            break;
        default :
            document.getElementById('13').removeAttribute('disabled');
            div.innerText='';
            div.style.cssText = "background-color : #000; padding: 0px";
            break;
    }
};

function resoReading() {
    var div = document.getElementById('warnreso'),
        rSelect = document.getElementById('resolution'),
        rValeur = rSelect.options[rSelect.selectedIndex].value;

    switch (rValeur){
        case '3796' :
        case '4096_blank' :
            div.innerText = "Attention la résolution choisie entraîne le téléchargement d'images volumineuses";
            div.style.cssText = "background-color: #F00; padding: 3px; margin: 1px; width: 300px;";
            break;
        default :
            div.innerText = "";
            div.style.cssText = "background-color : #000; padding: 0px";


    }
};

function divColoring($class, $color) {
    var div = document.getElementsByClassName($class);
    for (var i = 0; i < div.length; i++){
        div[i].style.cssText = 'background-color:' + $color +  '; margin : 2px 0px; padding: 5px 10px 15px 10px';
    }
}