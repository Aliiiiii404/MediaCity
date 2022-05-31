// pour les serie
const xhr1 = new XMLHttpRequest();
var url1 = "https://api.themoviedb.org/3/discover/tv?api_key=155fc5a9bbcf6f9a6241b3dbaf8b1656&language=en-US&sort_by=popularity.desc&without_keywords=210024&page=1";
const method = "GET";
//open request
xhr1.open(method, url1, true);
//send
xhr1.send(null);
//the data
xhr1.onreadystatechange = ()=>{
  if(xhr1.readyState == 4 && xhr1.status == 200) {
    var data1 = JSON.parse(xhr1.responseText);
    var imgUrl = 'https://image.tmdb.org/t/p/w500';
    var j = 6;
    for(var i = 0 ; i < 3 ; i++){
      //image et titre pour les serie
        document.getElementsByClassName("bande-serie")[i].src = imgUrl + data1.results[j].poster_path;
        document.getElementsByClassName("content-serie")[i].innerHTML = data1.results[j].name;
        j++
        //le score 
        var scoreDiv = document.getElementsByClassName("score-serie")[i];
        var scoreSerie = document.createElement("h2");
        var scoreSerieValue =document.createTextNode("Score : " + data1.results[j].vote_average + "⭐⭐⭐⭐");
        scoreSerie.appendChild(scoreSerieValue);
        scoreDiv.appendChild(scoreSerie);
        //la datte de sortie serie
        var dateSerie = document.getElementsByClassName("date-serie")[i];
        var dateSerieValue = document.createTextNode("Date : " + data1.results[j].first_air_date);
        dateSerie.appendChild(dateSerieValue);
        scoreDiv.appendChild(dateSerie);
    }
  }
}