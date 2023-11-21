//Scroll ketika nav-link di-klik
const navLinks = document.querySelectorAll("#scrolled-nav-link");
if(navLinks) {
  navLinks.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault;
      const target = link.dataset.target;
      const offsetTop = document.querySelector("#" + target).offsetTop;
      
      scroll({
          top: offsetTop,
          behavior: "smooth"
      });
    })
  })
}
