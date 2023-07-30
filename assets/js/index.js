
var a = document.querySelector(".ake");
// console.log(a);
var menu = document.querySelectorAll('.digiMenu');
var menu1 = document.querySelector(".content-menu-1");
var menu2 = document.querySelector(".content-menu-2");
var menu3 = document.querySelector(".content-menu-3");
var menu4 = document.querySelector(".content-menu-4");
var menu5 = document.querySelector(".content-menu-5");
for(let s=0; s<menu.length; s++) {
    menu[s].style.display = "none";
}
menu[0].style.display = "flex";
function showContent(v) {
    localStorage.setItem("menuDisplay",v);
    for(let s=0; s<menu.length; s++) {
        if(s == v) {
            a.classList.remove("show");
            menu[s].style.display = "flex";
           
        } else {
            menu[s].style.display = "none";
        }
    }
}


