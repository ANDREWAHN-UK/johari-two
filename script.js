
// Carousel stuff below
const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

const navToggle = document.querySelector('.nav-toggle');//this turns the nav-toggle class into a js object

const navLinks = document.querySelectorAll('.nav--link');//this puts all the nav links into one variable

//the below is code to interact with the js object

navToggle.addEventListener('click', () =>{
  document.body.classList.toggle('nav-open');
})


//the below to act on navLinks

navLinks.forEach(link =>
  {
      link.addEventListener('click', () => {
          document.body.classList.remove('nav-open');
      })
  })


