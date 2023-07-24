const container = document.querySelector(".container-scrollx");
const sections = gsap.utils.toArray(".container-scrollx section");
const animate = gsap.utils.toArray(".animateSpan");

window.addEventListener("scroll", function () {
  let scrolled = window.scrollY;
  let parallaxBg = document.querySelector(".container-bg");
  let parallaxContent = document.querySelector(".parallax-content");
  let parallaxH1 = this.document.querySelector(".parallax-content h1");
  let fadeElements = document.querySelectorAll(".fade-in");
  let button = document.querySelectorAll(".fade-in button");
  let fadeInDiv = document.querySelectorAll(".fadeIn-div");

  parallaxBg.style.backgroundPositionX = scrolled * 0.5 + "px";
  parallaxH1.style.color = "#000";
  parallaxH1.style.opacity = 1;
  //   parallaxBg.style.transform = "translateY(" + scrolled * -0.2 + "px)";
  // button.display = "block";
  //   button.style.cursor = "wait";
  parallaxContent.style.transform = "translateY(" + scrolled * 0.1 + "px)";
  for (let i = 0; i < fadeElements.length; i++) {
    let fadeElement = fadeElements[i];
    if (
      fadeElement.offsetTop - window.innerHeight - window.innerWidth <
      scrolled
    ) {
      fadeElement.classList.add("show");
      button.display = "block";
    }
  }

  for (let x = 0; x < fadeInDiv.length; x++) {
    let windowHeight = window.innerHeight;
    let revealTop = fadeInDiv[x].getBoundingClientRect().top;
    let revealPoint = 30;

    if (revealTop < windowHeight - revealPoint) {
      fadeInDiv[x].classList.add("active");
    } else {
      fadeInDiv[x].classList.remove("active");
    }
  }
});

let scrollTween = gsap.to(sections, {
  xPercent: -100 * (sections.length - 1),
  ease: "none",
  scrollTrigger: {
    trigger: ".container-scrollx",
    pin: true,
    scrub: 1,
    end: "+=3000",
  },
});

sections.forEach((section) => {
  let texts = section.querySelectorAll(".anim");
  gsap.from(texts, {
    y: -130,
    opacity: 0,
    duration: 2,
    ease: elastic,
    stagger: 0.1,
    scrollTrigger: {
      trigger: section,
      containerAnimation: scrollTween,
      start: "left center",
      markers: true,
    },
  });
});
