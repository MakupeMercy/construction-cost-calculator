const bar = document.querySelector(".toggle-nav-list");
const list = document.querySelector(".header-nav");
const setBtn = document.getElementById("btn-submit");

// setBtn.addEventListener("click", (e) => e.preventDefault());

bar.addEventListener("click", () => {
  if (list.classList.contains("show-nav-list")) {
    list.classList.remove("show-nav-list");
  } else {
    list.classList.add("show-nav-list");
  }
  console.log(list);
});

/*A code to link the home page and the main help page*/

document.getElementById("btn-3-1").addEventListener("click", myFunction);
function myFunction() {
  location.href = "mainHelp.php";
}

/* a code to navigate from main help page to home page*/

document.getElementById("button1").addEventListener("click", backHome);
function backHome() {
  location.href = "home.php";
}
/* navigate from setup page to calculator help page */

document
  .getElementsByClassName("btn-calculator-help")
  .addEventListener("click", calculator);
function calculator() {
  location.href = "calculator.php";
}
/* navigate from setup page to calculator setup help page help page */
document.getElementsByClassName("btn-setup").addEventListener("click", setUp);
function setUp() {
  location.href = "setup.php";
}

document.getElementsById("btn-setup").addEventListener("click", setBack);
function setBack() {
  location.href = "mainHelp.php";
}

document.getElementById("calculator-btn").addEventListener("click", calcBack);
function calcBack() {
  location.href = "mainHelp.php";
}

document
  .getElementById("pageSetUp-btn")
  .addEventListener("click", pageSetUpBack);
function pageSetUpBack() {
  location.href = "home.php";
}

document.getElementById("btn-2-1").addEventListener("click", pageSet);
function pageSet() {
  location.href = "pageSetup.php";
}

document.getElementById("btn-1").addEventListener("click", startCalculation);
function startCalculation() {
  
  location.href = "startCalculation.php";

}

document.getElementById("startcalc-btn").addEventListener("click", startCalc);
function startCalc() {
  location.href = "home.php";
}

document.getElementById("my-btn").addEventListener("click", register);
function register() {
  location.href = "regDbConnect.php";
}



//navigate from login to main page

//set up page set time ut;
setInterval(function () {
  alert("your sesion is ending");
}, 36000);

setInterval(function () {
  redirect();
}, 72000);

function redirect() {
  document.location = "../pagesetup.php";
}
