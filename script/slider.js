var slider = tns({
    container: '.banner',
    items: 1,
    controls: false,
    autoplayButtonOutput: false,
    slideBy: 'page',
    autoplay: true,
    mouseDrag: true
  });

const toggleBtn = document.querySelector('.toggle__button')
const dropdown = document.querySelector('.dropdown')

const closeBtn = document.querySelector('.close')


toggleBtn.addEventListener('click', ()=> {
    dropdown.classList.add('show');
    toggleBtn.classList.add('cross');
})

closeBtn.addEventListener('click', ()=> {
    dropdown.classList.remove('show');
    toggleBtn.classList.remove('cross');
})