function onLoad(){ 
    var header = document.getElementById('header');
    var main = document.querySelector('main');
    main.style.marginTop = header.offsetHeight + "px";
}

function clickIcon(){
    var navigation = document.querySelector('.header__nav');
    var iconElement = document.querySelector('.header__nav_icon_item');

    if(iconElement.classList.contains('fa-bars')) {
        navigation.classList.add("header__nav-open");
        iconElement.classList.remove('fa-bars');
        iconElement.classList.add('fa-times');
    } else {
        navigation.classList.remove("header__nav-open");
        iconElement.classList.add('fa-bars');
        iconElement.classList.remove('fa-times');
    }
}

function carousel(action) {

}