// searsh bar
var searchBlock = document.getElementsByClassName("header__search-content")[0];
var search = document.getElementById("search");
function searchBarBlock(){
    if(search.classList == ""){
        search.classList.add("active");
        searchBlock.style.display = "flex";
    }else if(search.classList == "active"){
        search.classList.replace("active", "notActive");
        searchBlock.style.display = "none";
    }else if(search.classList == "notActive"){
        search.classList.replace("notActive", "active");
        searchBlock.style.display = "flex";
    }
}


var btn = document.getElementById('nav-mobile-btn');
var nav = document.getElementById('nav-mobile-div');
var berger = document.getElementsByClassName('berger')[0];
btn.addEventListener('click', ()=>{
    if(nav.classList == "show" && berger.classList == "berger croix"){
        nav.classList.replace("show", "not-show");
        berger.classList.remove('croix');
    }else if(nav.classList == "not-show" && berger.classList != "croix"){
        nav.classList.replace("not-show", "show");
        berger.classList.add('croix');
    }
})
