const passwordConnexion = document.getElementsByClassName('password-connexion')[0];
const iconPassword = document.getElementById('icon-password');

iconPassword.addEventListener('click',()=>{
    if (passwordConnexion.value != "" && passwordConnexion.type == "password") {
        iconPassword.classList.replace('fa-eye', 'fa-eye-slash');
        passwordConnexion.type = 'text';
    }else if(passwordConnexion.value != "" && passwordConnexion.type == "text"){
        iconPassword.classList.replace('fa-eye-slash', 'fa-eye');
        passwordConnexion.type = "password";
    }
})



// const passwordConnexion1 = document.getElementsByClassName('password-connexion')[0];
// const passwordConnexion2 = document.getElementsByClassName('password-connexion')[1];
// const iconPassword1 = document.getElementById('icon-password1');
// const iconPassword2 = document.getElementById('icon-password2');
// iconPassword1.addEventListener('click',()=>{
//   if (passwordConnexion1.value != "" && passwordConnexion1.type == "password") {
//       iconPassword1.classList.replace('fa-eye', 'fa-eye-slash');
//       passwordConnexion1.type = 'text';
//   }else if(passwordConnexion1.value != "" && passwordConnexion1.type == "text"){
//       iconPassword1.classList.replace('fa-eye-slash', 'fa-eye');
//       passwordConnexion1.type = "password";
//   }
// })
// iconPassword2.addEventListener('click',()=>{
//   if (passwordConnexion2.value != "" && passwordConnexion2.type == "password") {
//     iconPassword2.classList.replace('fa-eye', 'fa-eye-slash');
//       passwordConnexion2.type = 'text';
//   }else if(passwordConnexion2.value != "" && passwordConnexion2.type == "text"){
//     iconPassword2.classList.replace('fa-eye-slash', 'fa-eye');
//       passwordConnexion2.type = "password";
//   }
// })