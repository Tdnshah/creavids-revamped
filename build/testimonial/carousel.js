const galleryContainer = document.querySelector('.gallery-container');
const galleryControlsContainer = document.querySelector('.gallery-controls');
const galleryControls = ['<', '>'];
const galleryItems = document.querySelectorAll('.gallery-item');

class Carousel {
  constructor(container, items, controls) {
    this.carouselContainer = container;
    this.carouselControls = controls;
    this.carouselArray = [...items];
  }

  // Assign initial css classes for gallery and nav items
  setInitialState() {
    this.carouselArray[3].classList.add('gallery-item-first');
    this.carouselArray[0].classList.add('gallery-item-previous');
    this.carouselArray[1].classList.add('gallery-item-selected');
    this.carouselArray[2].classList.add('gallery-item-next');
    this.carouselArray[4].classList.add('gallery-item-last');

    document.querySelector('.gallery-nav').childNodes[3].className = 'gallery-nav-item gallery-item-first';
    document.querySelector('.gallery-nav').childNodes[2].className = 'gallery-nav-item gallery-item-previous';
    document.querySelector('.gallery-nav').childNodes[1].className = 'gallery-nav-item gallery-item-selected';
    document.querySelector('.gallery-nav').childNodes[0].className = 'gallery-nav-item gallery-item-next';
    document.querySelector('.gallery-nav').childNodes[4].className = 'gallery-nav-item gallery-item-last';
  }

  // Update the order state of the carousel with css classes
  setCurrentState(target, selected, previous, next, first, last) {

    first.forEach(el => {
      el.classList.remove('gallery-item-first');
      el.classList.add('gallery-item-next');
    })

    next.forEach(el => {
      el.classList.remove('gallery-item-next');
      el.classList.add('gallery-item-selected');
    });

    selected.forEach(el => {
      el.classList.remove('gallery-item-selected');
      el.classList.add('gallery-item-previous');
    });

    previous.forEach(el => {
      el.classList.remove('gallery-item-previous');
      el.classList.add('gallery-item-last');
    });

    last.forEach(el => {
      el.classList.remove('gallery-item-last');
      el.classList.add('gallery-item-first');
    })
  }

  // Construct the carousel navigation
  setNav() {
    galleryContainer.appendChild(document.createElement('ul')).className = 'gallery-nav';

    this.carouselArray.forEach(item => {
      const nav = galleryContainer.lastElementChild;
      nav.appendChild(document.createElement('li'));
    });
  }

  // Construct the carousel controls
  setControls() {
    this.carouselControls.forEach(control => {
      //galleryControlsContainer.appendChild(document.createElement('button')).className = `gallery-controls-${control}`;
      galleryControlsContainer.appendChild(document.createElement('button')).className = `gallery-controls-${control}`;
    });

    !!galleryControlsContainer.childNodes[0] ? galleryControlsContainer.childNodes[0].innerHTML = this.carouselControls[0] : null;
    !!galleryControlsContainer.childNodes[1] ? galleryControlsContainer.childNodes[1].innerHTML = this.carouselControls[1] : null;
  }

  // Add a click event listener to trigger setCurrentState method to rearrange carousel
  useControls() {
    const triggers = [...galleryControlsContainer.childNodes];

    triggers.forEach(control => {
      control.addEventListener('click', () => {
        const target = control;
        const selectedItem = document.querySelectorAll('.gallery-item-selected');
        const previousSelectedItem = document.querySelectorAll('.gallery-item-previous');
        const nextSelectedItem = document.querySelectorAll('.gallery-item-next');
        const firstSelectedItem = document.querySelectorAll('.gallery-item-first');
        const lastSelectedItem = document.querySelectorAll('.gallery-item-last');

        this.setCurrentState(target, selectedItem, previousSelectedItem, nextSelectedItem, firstSelectedItem, lastSelectedItem);
      });
    });
  }
}

const exampleCarousel = new Carousel(galleryContainer, galleryItems, galleryControls);

exampleCarousel.setControls();
exampleCarousel.setNav();
exampleCarousel.setInitialState();
exampleCarousel.useControls();
