"use strict";

var header = document.querySelector("header");
var header_links = document.querySelectorAll(".header-nav a");
var hamburger_menu = document.querySelector(".hamburger-menu");
var hamburger_menu_bar = document.querySelectorAll(".hamburger-menu .bar");
var header_nav_from_hamburger = document.querySelector(".header-nav-from-hamburger");

window.addEventListener("scroll", function () {
    var sTop = (this.pageYOffset || document.scrollTop) - (document.clientTop || 0);
    if (sTop > 150) {
        header.classList.add("white-header");
    } else {
        header.classList.remove("white-header");
    }
});

hamburger_menu.addEventListener("click", function () {
    for (var j = 0; j < hamburger_menu_bar.length; j++) {
        if (hamburger_menu_bar[j].classList.contains("animate")) {
            header_nav_from_hamburger.classList.remove("open");
            hamburger_menu_bar[j].classList.remove("animate");
        } else {
            header_nav_from_hamburger.classList.add("open");
            hamburger_menu_bar[j].classList.add("animate");
        }
    }
});

var tag = document.createElement('script');

tag.src = "//www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('hiveee-video', {
        events: {
            'onReady': onPlayerReady
        }
    });
}

function onPlayerReady() {
    player.playVideo();
    // Mute!
    player.mute();
}