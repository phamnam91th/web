let id = document.getElementById("menuid").value;
let num = Number.parseInt(id);
let menu = document.querySelectorAll(".num");
console.log(menu);
for(let s=0;s<menu.length;s++) {
    menu[s].style.display = "none";
}

for(let s in menu) {
    if(s == num) {
        menu[s].style.display = "block";
    }
}

