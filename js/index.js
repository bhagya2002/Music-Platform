const header = document.querySelector(".main-header");
const logo = document.querySelector(".brand-logo");
const guy = document.querySelector(".lady-image");
const nav = document.querySelector(".main-nav");
const texter = document.querySelector(".title");
const sub = document.querySelector(".subtitle");
const ad = document.querySelector(".ad");
const btn = document.querySelector(".btn");

const tl = new TimelineMax();

tl.fromTo(header, 1, {
        y: "-100%",
        opacity: 0
    }, {
        y: "0%",
        opacity: 1,
        ease: Power2.easeInOut
    })
    .fromTo(guy, 0.75, {
        opacity: 0,
        x: 60
    }, {
        opacity: 1,
        x: 0
    }, "-=0.1")
    .fromTo(texter, 0.55, {
        opacity: 0,
        x: 30
    }, {
        opacity: 1,
        x: 0
    }, "-=0.1")
    .fromTo(sub, 0.50, {
        opacity: 0,
        x: 40
    }, {
        opacity: 1,
        x: 0
    }, "-=0.1")
    .fromTo(ad, 0.50, {
        opacity: 0,
        x: 40
    }, {
        opacity: 1,
        x: 0
    }, "-=0.5")
    .fromTo(btn, 0.50, {
        opacity: 0,
        x: 40
    }, {
        opacity: 1,
        x: 0
    }, "-=0.1")