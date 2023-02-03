/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}


window.onload = function() {
  document.querySelector('.curtain').classList.add('reveal');
  setTimeout(function() {
    document.querySelector("#hero-text").classList.add("scrolled");
    }, 1000);
  
};


//animate
document.addEventListener( 'DOMContentLoaded', function() {
  const scrollElements = document.querySelectorAll(".js-scroll");
    
  const elementInView = (el, dividend = 1) => { 
    const elementTop = el.getBoundingClientRect().top;
  
    return (
      elementTop <=
      (window.innerHeight || document.documentElement.clientHeight) / dividend
    );
  };
  
  const elementOutofView = (el) => {
    const elementTop = el.getBoundingClientRect().top;
  
    return (
      elementTop > (window.innerHeight || document.documentElement.clientHeight)
    );
  };
  
  const displayScrollElement = (element) => {
    setTimeout(function() {
    element.classList.add("scrolled");
    }, 1000);
  };
  
  const hideScrollElement = (element) => {
    
      element.classList.remove("scrolled");
    
  };
  
  const handleScrollAnimation = () => {
    scrollElements.forEach((el) => {
      if (elementInView(el, 1.25)) {
        displayScrollElement(el);
      } else if (elementOutofView(el)) {
        hideScrollElement(el)
      }
    })
  }
  
  window.addEventListener("scroll", () => { 
    handleScrollAnimation();
  });
  
  } );