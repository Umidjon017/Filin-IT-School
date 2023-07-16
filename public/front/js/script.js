// Navbar
const burger_btn = document.querySelector(".burger__btn button")
const nav = document.querySelector(".nav")

burger_btn.onclick = () =>{
  nav.classList.toggle("nav__show")
  burger_btn.classList.toggle("btn__close")
}

// Modal
const modal_btn = document.querySelector("#modal__btn")
const rm__close = document.querySelector(".rm__close")
const modal__close = document.querySelector(".modal__close")
const modal = document.querySelector(".result__modal")

let winWidth = window.innerWidth

if (modal_btn) {
  modal_btn.onclick = () =>{
    modal.classList.add("result__modal__open")
    if (winWidth < 800) {
      document.body.style = "overflow: hidden"
    } else {
      document.body.style = "overflow: hidden; width:calc(100% - 0.4em);"
    }
  }
}

function modalClose() {
  modal.classList.remove("result__modal__open")
  document.body.style = "overflow: visible"
}
if (rm__close) {
  rm__close.onclick = modalClose
}
if (modal__close) {
  modal__close.onclick = modalClose
}

// Scroll
let last_known_scroll_position = 0;
let ticking = false;
const gear1 = document.querySelectorAll("#gear1")
const gear2 = document.querySelectorAll("#gear2")
const gear3 = document.querySelectorAll("#gear3")
const scroll__up = document.querySelector(".scroll__up")

function doSomething(scroll_pos) {
  for (let i = 0; i < gear1.length; i++) {
    gear1[i].style = `transform: rotate(${scroll_pos / 6}deg);`
    gear2[i].style = `transform: rotate(${-scroll_pos / 6}deg);`
    gear3[i].style = `transform: rotate(${scroll_pos / 6}deg);`
  }
  if (scroll_pos >= 768) {
    scroll__up.style = "transform: scale(1); opacity: 1;"
  } else {
    scroll__up.style = "transform: scale(0); opacity: 0;"
  }
}
scroll__up.onclick = () => window.scrollTo(0, 0)

window.addEventListener('scroll', function(e) {
  last_known_scroll_position = window.scrollY;

  if (!ticking) {
    window.requestAnimationFrame(function() {
      doSomething(last_known_scroll_position);
      ticking = false;
    });

    ticking = true;
  }
});

// questions
const answer = document.querySelectorAll(".answer")

if (answer) {
  for (let i = 0; i < answer.length; i++) {
    let answer_height = answer[i].clientHeight
    answer[i].onclick = () =>{
      console.log(answer[i].childNodes[1].clientHeight)
      answer[i].classList.toggle("answer__show")
      if (answer[i].classList.contains("answer__show")) {
        answer[i].style = `height: ${answer_height + answer[i].childNodes[1].clientHeight - 5}px;`
      } else{
        answer[i].style = `height: ${answer_height}px;`
      }
    }
  }
}