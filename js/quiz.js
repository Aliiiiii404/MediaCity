//QUIZ SCRIPT
//THE TRUE BUTTONS
var vrai = document.querySelectorAll('.guess0');
var false1 = document.querySelectorAll('.guess1');
/*
for(var n = 0; n < vrai.length ; n++){
  vrai[n].addEventListener('click', backgroundChangerTrue);
}
*/
vrai.forEach(element => {
  element.addEventListener("click", ()=>{
    element.disabled = true;
    backgroundChangerTrue(element);
  })
});

//fonction true
function backgroundChangerTrue(e) {
    if(e.classList == 'guess0'){
      e.classList.replace("guess0", "guess0-clicked");
    }
};



/*
for(var y = 0; y < false1.length ; y++){
  false1[y].addEventListener('click', backgroundChangerFalse);
}
*/
false1.forEach(element => {
  element.addEventListener('click', ()=>{
    element.disabled = true;
    backgroundChangerFalse(element);
  })
});

//fonction false
function backgroundChangerFalse(e) {
    if(e.classList == 'guess1'){
        e.classList.replace("guess1", "guess1-clicked");
    }
};