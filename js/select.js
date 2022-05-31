// le tableux des membres dans la BDD
document.getElementById("sel_members").addEventListener("change", function(){
    xhr = new XMLHttpRequest();
    xhr.open("GET", 'assets/get_members.php?sel_members=' + this.value, true);
    xhr.send();
    xhr.onreadystatechange = function(){
        if(xhr.status == 200 || xhr.readyState == 4){
            document.getElementById("res").innerHTML = xhr.responseText;
        }
    }
});

//tableux des produits
document.getElementById("sel_product").addEventListener("change", function(){
    xhr = new XMLHttpRequest();
    xhr.open("GET", 'assets/get_products.php?sel_product=' + this.value, true);
    xhr.send();
    xhr.onreadystatechange = function(){
        if(xhr.status == 200 || xhr.readyState == 4){
            document.getElementById("res2").innerHTML = xhr.responseText;
        }
    }
});

// supprimer un compte dans la table member
document.getElementById("delete-member-btn").addEventListener("click", function(){
    var valId = document.getElementById("id-member").value;
    if (valId != "") {
        if (confirm("Vous Voulez vraiment supprimer ce compte ?")) {
            xhr = new XMLHttpRequest();
            xhr.open("GET", 'assets/delete-member.php?id=' + valId, true);
            xhr.send();
            xhr.onreadystatechange = function(){
                if(xhr.status == 200 || xhr.readyState == 4){
                    document.getElementById("id-member").value = "";
                    alert("la suppression as bien etais faite");
                    document.location = "admin.php";
                }
            }
        }else{
            alert("La suppression as été annuler !!! ");
            document.location = "admin.php";
        }
    }else if(valId == ""){
        alert("Entrez l'ID de l'utilisateur");
    }
});

//supprimer un produits dans la table produt
document.getElementById("delete-product-btn").addEventListener("click", function(){
    var valIdProduct = document.getElementById("id-product").value;
    if (valIdProduct != "") {
        if (confirm("Vous voulez vraiment supprimer ce produits ?")) {
            xhr = new XMLHttpRequest();
            xhr.open("GET", 'assets/delete-product.php?id=' + valIdProduct, true);
            xhr.send();
            xhr.onreadystatechange = function(){
                if(xhr.status == 200 || xhr.readyState == 4){
                    document.getElementById("id-product").value = "";
                    alert("La suppression a bien été faite");
                    document.location = "admin.php";
                }
            }
        }
    }else if(valIdProduct == ""){
        alert("Entrez une valeur");
    }
});
