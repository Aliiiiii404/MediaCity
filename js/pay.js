document.getElementById("add-fav").addEventListener("click", function(){
    var idMember = document.getElementById("member-id-desc").value;
        if (confirm("Vous voulez vraiment payer maintenet ?")) {
            xhr = new XMLHttpRequest();
            xhr.open("GET", 'assets/delete-panier.php?idMmember=' + idMember, true);
            xhr.send();
            xhr.onreadystatechange = function(){
                if(xhr.status == 200 || xhr.readyState == 4){
                    alert("Le payment a été fait");
                    document.location.reload();
                }
            }
        }else{
            alert("le payment a été annuler")
            window.location.href = "./panier.php";
        }
});
