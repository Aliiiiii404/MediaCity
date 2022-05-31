//API
//pour les films
const xhr = new XMLHttpRequest();
const url ="https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&api_key=155fc5a9bbcf6f9a6241b3dbaf8b1656";
const method = "GET";
//open request
xhr.open(method, url, true);
//send
xhr.send(null);
//the data
xhr.onreadystatechange = ()=>{
  if(xhr.readyState == 4 && xhr.status == 200) {
    var data = JSON.parse(xhr.responseText);
    var imgUrl = 'https://image.tmdb.org/t/p/w500';
    for(var i = 0 ; i < 3 ; i++){
      //image et titre pour les films
        document.getElementsByClassName("bande-film")[i].src = imgUrl + data.results[i].poster_path;
        document.getElementsByClassName("content-film")[i].innerHTML = data.results[i].original_title;
        //score
        var scoreDiv = document.getElementsByClassName("score-film")[i];
        var scoreFilm = document.createElement("h2");
        var scoreValue =document.createTextNode("Score : " + data.results[i].vote_average + "⭐⭐⭐⭐");
        scoreFilm.appendChild(scoreValue);
        scoreDiv.appendChild(scoreFilm);
       //la datte de sortie film 
        var dateFilm = document.getElementsByClassName("date-film")[i];
        var dateFilmValue = document.createTextNode("Date : " + data.results[i].release_date);
        dateFilm.appendChild(dateFilmValue);
        scoreDiv.appendChild(dateFilm);
    }
  }
}
