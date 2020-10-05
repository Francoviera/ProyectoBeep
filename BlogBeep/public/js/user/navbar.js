"use strict";
document.addEventListener("DOMContentLoaded", function(){
    let btnNav = document.querySelector(".slicknav_btn");

    btnNav.addEventListener("click", function(){
        document.querySelector(".slicknav_nav").classList.toggle("is-active"); 
    });
});