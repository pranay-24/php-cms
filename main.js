console.log('Hello World');
// VARRIABLE£
const burgerBtn = document.querySelector("#burger");
const navMenu = document.querySelector(".nav")

//ecouteur d'évennement
burgerBtn.addEventListener('click', burgerClick);

//event listeners for register and login

document.getElementById("signUp_button").addEventListener("click", function() {
    // Redirect to the PHP file when the button is clicked
    window.location.href = "register.php";
  });
document.getElementById("login_button").addEventListener("click", function() {
    // Redirect to the PHP file when the button is clicked
    window.location.href = "login.php";
  });

//fonction

function burgerClick() {
    burgerBtn.classList.toggle("active");
    if(burgerBtn.classList.contains("active")){
        navMenu.classList.add("active")
    }else{
        navMenu.classList.remove("active")
    }
} 

