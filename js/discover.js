const header = document.querySelector(".main-header");
const logo = document.querySelector(".brand-logo");
const nav = document.querySelector(".main-nav");
const texter = document.querySelector(".title");
const icons = document.querySelector(".icon-section");
const sub = document.querySelector(".subtitle");
const imager = document.querySelector(".covers-image");
const bottom = document.querySelector(".main-footer");

// const hamburger = document.querySelector(".hamburger");
// const headline = document.querySelector(".headline");

const tl = new TimelineMax();

tl.fromTo(header, 1, {
        y: "-100%",
        opacity: 0
    }, {
        y: "0%",
        opacity: 1,
        ease: Power2.easeInOut
    })
    .fromTo(texter, 0.55, {
        opacity: 0,
        x: 35
    }, {
        opacity: 1,
        x: 0
    }, "-=0.1")
    .fromTo(icons, 0.50, {
        opacity: 0,
        x: 40
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
    .fromTo(imager, 0.50, {
        opacity: 0,
        x: 40
    }, {
        opacity: 1,
        x: 0
    }, "-=0.1");