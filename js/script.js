//FLIPING CARD
//Flip card
var card = document.querySelectorAll('.card__inner');
card.forEach(item =>{
  item.addEventListener('click', function() {
    item.classList.toggle('is-flipped');
  });
});

// API FILM
const xhr = new XMLHttpRequest();
const method = "GET";
const url ="https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&api_key=155fc5a9bbcf6f9a6241b3dbaf8b1656";
var baseUrlImg ='https://image.tmdb.org/t/p/w500';
//open request
xhr.open(method, url, true);
//send
xhr.send(null);
//the data
xhr.onreadystatechange = ()=>{
  if(xhr.readyState == 4 && xhr.status == 200) {
    var j = 10;
    for(var i = 0 ; i < 3 ; i++){
      var imgFront = document.getElementsByClassName("demon")[i]; //front image
      var imgback = document.getElementsByClassName("pp")[i]; //back image
      var CardTitle = document.getElementsByClassName("card--title")[i]; //title
      var CradDesc = document.getElementsByClassName("card--desc")[i]; //overview
      var str;
      var data = JSON.parse(xhr.responseText);
      imgFront.src =baseUrlImg + data.results[j].poster_path;
      imgback.src =baseUrlImg + data.results[j].poster_path;
      CardTitle.innerHTML = data.results[j].original_title;
      str = data.results[j].overview;
      CradDesc.innerHTML = str.substr(1, 293) + ".";
      j++;
    }
  }
}

//API SERIE
const xhr1 = new XMLHttpRequest();
const url1 ="https://api.themoviedb.org/3/discover/tv?api_key=155fc5a9bbcf6f9a6241b3dbaf8b1656&language=en-US&sort_by=popularity.desc&without_keywords=210024&page=1";
var baseUrlImg ='https://image.tmdb.org/t/p/w500';
//open request
xhr1.open(method, url1, true);
//send
xhr1.send(null);
//the data
xhr1.onreadystatechange = ()=>{
  if(xhr1.readyState == 4 && xhr1.status == 200) {
    for(var i = 3 ; i < 6 ; i++){
      var imgFront = document.getElementsByClassName("demon")[i]; //front image
      var imgback = document.getElementsByClassName("pp")[i]; //back image
      var CardTitle = document.getElementsByClassName("card--title")[i]; //title
      var CradDesc = document.getElementsByClassName("card--desc")[i]; //overview
      var str;
      var data1 = JSON.parse(xhr1.responseText);
      imgFront.src =baseUrlImg + data1.results[i].poster_path;
      imgback.src =baseUrlImg + data1.results[i].poster_path;
      CardTitle.innerHTML = data1.results[i].name;
      str = data1.results[i].overview;
      CradDesc.innerHTML = str.substr(1, 293) + ".";
    }
  }
}