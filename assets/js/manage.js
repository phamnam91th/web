var $ = function(id) {
    return document.getElementById(id);
}

var opens = document.getElementsByClassName("open");

var menus = document.querySelectorAll(".menu");
console.log(menus);
for(let s=0; s<menus.length; s++) {
    menus[s].style.display = "none";
}
var ids = 0;
function isOpen(id) {
    ids = id;
    for(let s=0; s<menus.length; s++) {
        if(s == id) {
            menus[s].style.display = "block";
        } else {
            menus[s].style.display = "none";
        }
    }
    localStorage.setItem("page-layout",ids);
    console.log(ids);
}
ids = localStorage.getItem("page-layout");
isOpen(ids);

function del_account(id) {
    console.log(id);
    let mes = confirm('are you sure delete ?'); 
    if(mes) {
        window.location.href = `delete.php?deleteid=${id}&id=0`;
    }
}
function del_branch(id) {
    console.log(id);
    let mes = confirm('are you sure delete ?'); 
    if(mes == true) {
        window.location.href = `delete.php?deleteid=${id}&id=1`;
        console.log("aaa");
    }
}
function del_employee(id) {
    console.log(id);
    let mes = confirm('are you sure delete ?'); 
    if(mes) {
        window.location.href = `delete.php?deleteid=${id}&id=2`;
    }
}
function del_category(id) {
    console.log(id);
    let mes = confirm('are you sure delete ?'); 
    if(mes) {
        window.location.href = `delete.php?deleteid=${id}&id=3`;
    }
}
function del_deviceos(id) {
    console.log(id);
    let mes = confirm('are you sure delete ?'); 
    if(mes) {
        window.location.href = `delete.php?deleteid=${id}&id=4`;
    }
}
function del_product(id) {
    console.log(id);
    let mes = confirm('are you sure delete ?'); 
    if(mes == true) {
        window.location.href =  `delete.php?deleteid=${id}&id=5`;   //;
    }
}
function del_brand(id) {
    console.log(id);
    let mes = confirm('are you sure delete ?'); 
    if(mes) {
        window.location.href = `delete.php?deleteid=${id}&id=6`;
    }
}
function del_galery(id) {
    console.log(id);
    let mes = confirm('are you sure delete ?'); 
    if(mes) {
        // document.getElementById(`"${id}"`).href = `delete.php?deleteid=${id}&id=7`;
        window.location.href = `delete.php?deleteid=${id}&id=7`;
    }
}