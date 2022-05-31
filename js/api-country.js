
// //Api for city's
// var sel = document.getElementById("sel");
// var cat = document.getElementById("categorie");
// //fucnctions
// window.addEventListener("load", ()=>{
//   const xhr = new XMLHttpRequest();
//   const url = "https://api.first.org/data/v1/countries";
//   const method = "GET";

//   //open request
//   xhr.open(method, url, true);
//   //send
//   xhr.send(null);

//   //the data
//   xhr.onreadystatechange = ()=>{
//     if(xhr.readyState == 4 && xhr.status == 200) {
//       var data = JSON.parse(xhr.responseText);
//       console.log(data);
//       for(var i = 0 ; i<data.length ; i++){
//         var option = document.createElement("option");
//         option.textContent = data[i].name;
//         option.value = data[i].alpha2Code;
//         sel.appendChild(option);
//         //France par defaut
//         if (option.value == "FR") {
//             option.selected=true;
//         }
//       }
//     }
//   }
// });


// confirmation de mot de passe
var password = document.getElementById("password1"),
confirm_password = document.getElementById("password2");

function validatePassword() {
if (password.value != confirm_password.value) {
  confirm_password.setCustomValidity("Les Mot-De-Pass ne sont pas les memes");
} else {
  confirm_password.setCustomValidity('');
}
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;








