           
document.getElementById("delete-acount").addEventListener("click", function(){
    if (confirm("VOULEZ-VOUS VRAIMENT SUPPRIMER VOTRE COMPTE ?, IL SERA SUPPRIMER D'UNE MANIERE DEFINITIVE !!!")) {
        xhr = new XMLHttpRequest();
        xhr.open("GET", 'assets/delete-acount.php' , true);
        xhr.send();
        xhr.onreadystatechange = function(){
            if(xhr.status == 200 || xhr.readyState == 4){
                alert("la suppression a été faite !");
                window.location.href = "./inscreption.php";
            }
        }   
    }
});
