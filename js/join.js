const header = document.querySelector(".main-header");
const logo = document.querySelector(".brand-logo");
const nav = document.querySelector(".main-nav");
const texter = document.querySelector(".join-text");
const former = document.querySelector(".join-form");
const namer = document.querySelector(".namer");
const emailer = document.querySelector(".emailer");
const passer = document.querySelector(".passer");
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
    .fromTo(texter, 0.55, {
        opacity: 0,
        x: 35
    }, {
        opacity: 1,
        x: 0
    }, "-=0.1")
    .fromTo(former, 0.50, {
        opacity: 0,
        x: 40
    }, {
        opacity: 1,
        x: 0
    }, "-=0.1")
    .fromTo(namer, 0.50, {
        opacity: 0,
        x: 40
    }, {
        opacity: 1,
        x: 0
    }, "-=0.15")
    .fromTo(emailer, 0.50, {
        opacity: 0,
        x: 40
    }, {
        opacity: 1,
        x: 0
    }, "-=0.15")
    .fromTo(passer, 0.50, {
        opacity: 0,
        x: 40
    }, {
        opacity: 1,
        x: 0
    }, "-=0.15")
    .fromTo(btn, 0.50, {
        opacity: 0
    }, {
        opacity: 1,
    }, "-=0.1")
    .fromTo(bottom, 0.50, {
        opacity: 0,
        y: 40
    }, {
        opacity: 1,
        y: 0
    }, "-=0.55");