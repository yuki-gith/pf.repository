let nav = document.querySelector("#navArea");
let btn = document.querySelector(".toggle-btn");
let main = document.querySelector("main");
let header = document.querySelector("header");
let enquiryimg = document.querySelector("#enquiryimg");

btn.onclick = () => {
  nav.classList.toggle("close");
  main.classList.toggle("close");
  enquiryimg.classList.toggle("close");
  header.classList.toggle("close");
};