document.getElementById('menu').onmouseover = function(event){
    var target = event.target;
    if(target.className == 'menu-item'){
        var t = target.getElementsByClassName('submenu');
        closeMenu();
        t[0].style.display='block';
    }
}

document.onmouseover = function (event){
    var target = event.target;
    console.log(event.target);
    if(target.className != 'menu-item' && target.className != 'submenu'){
        closeMenu();
    }
}
function closeMenu(){
    var menu = document.getElementById('menu');
    var submenu = document.getElementsByClassName('submenu');
    for(var i = 0; i < submenu.length; i++) {
        submenu[i].style.display = "none";
    }
}