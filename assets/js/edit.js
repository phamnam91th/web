//0: account  1:branch  2:employee  3:category  4:OS  5:product  6:galery  7:order
let check =Number.parseInt(document.getElementById("check").value);
console.log(check);
let menus = document.getElementsByClassName("num");
console.log(menus);
for(let s=0; s<menus.length; s++) {
    menus[s].style.display = "none";
}
for(let s in menus) {
    if(s == check) {
        menus[s].style.display = "block";
    }
}
