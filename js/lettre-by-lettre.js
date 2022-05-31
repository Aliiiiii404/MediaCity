
// LETTRE BY LETTRE TEXT
var lettreByLettre = setInterval(lettre, 2000);

function lettre() {
    var text = document.querySelector('.Bientot');
    var strtext = text.textContent;
    var splitText = strtext.split("");
    text.textContent = "";

    for(var i=0; i < splitText.length; i++){
        text.innerHTML += "<span>"+ splitText[i] + "</span>";
    }
    var char = 0;
    var timer = setInterval(onTick, 50);
    function onTick() {
        var span = text.querySelectorAll("span")[char];
        span.classList.add('fade');
        char++
        if(char === splitText.length){
            complete();
            return;
        }
    }
    function complete(){
        clearInterval(timer);
        timer = null;
}};