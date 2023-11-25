const navToggle = document.getElementById("nav-toggle");
const navMenu = document.getElementById("nav-menu");
const navClose = document.getElementById("nav__close");

// Function to show menu
function showMenu() {
  navMenu.classList.add("show-menu");
}

// Function to hide menu
function hideMenu() {
  navMenu.classList.remove("show-menu");
}

// Event listener for navToggle click
if (navToggle) {
  navToggle.addEventListener("click", () => {
    if (navMenu.classList.contains("show-menu")) {
      hideMenu(); // Menu is shown, so hide it
    } else {
      showMenu(); // Menu is hidden, so show it
    }
  });
}

// Event listener for navClose click
if (navClose) {
  navClose.addEventListener("click", () => {
    hideMenu(); // Hide menu when close icon is clicked
  });
}

/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll(".nav__link");

function linkAction() {
  const navMenu = document.getElementById("nav-menu");
  // When we click on each nav__link, we remove the show-menu class
  navMenu.classList.remove("show-menu");
}
navLink.forEach((n) => n.addEventListener("click", linkAction));

/*==================== ACCORDION SKILLS ====================*/
const skillsContent = document.getElementsByClassName('skills__content');
const skillHeader = document.querySelectorAll('.skills__header');

function toggleSkills() {
  const itemClass = this.parentNode.className;

  for (let i = 0; i < skillsContent.length; i++) {
    skillsContent[i].className = 'skills__content skills__close';
  }

  if (itemClass === 'skills__content skills__close') {
    this.parentNode.className = 'skills__content skills__open';
  } else {
    this.parentNode.className = 'skills__content skills__close';
  }
}

skillHeader.forEach((el) => {
  el.addEventListener('click', toggleSkills);
});

/*==================== SERVICES MODAL ====================*/
const modalViews = document.querySelectorAll('.services__modal');
const modalBtns = document.querySelectorAll('.services__buttons');
const modalClose = document.querySelectorAll('.services__modal-close');

let modal = function (modalClick) {
  modalViews[modalClick].classList.add('active-modal');
};

modalBtns.forEach((modalBtn, i) => {
  modalBtn.addEventListener('click', () => {
    modal(i);
  });
});

modalClose.forEach((modalClose) => {
  modalClose.addEventListener('click', () => {
    modalViews.forEach((modalView) => {
      modalView.classList.remove('active-modal');
    });
  });
});


modalViews.forEach((modalView) => {
  modalView.addEventListener('click', (e) => {
    if (e.target === modalView) {
      modalView.classList.remove('active-modal');
    }
  });
});


/*==================== SHOW SCROLL UP ====================*/
function scrollUp() {
  const scrollUp = document.getElementById('scroll-up');
  if (this.scrollY >= 560) scrollUp.classList.add('show-scroll');
  else scrollUp.classList.remove('show-scroll');
}

window.addEventListener('scroll', scrollUp);


//======================= JavaScript untuk menangani klik pada navbar===================
const navLinks = document.querySelectorAll('.nav__link');

navLinks.forEach(link => {
  link.addEventListener('click', () => {
    // Hapus kelas 'active' dari semua navbar
    navLinks.forEach(navLink => navLink.classList.remove('active'));
    // Tambahkan kelas 'active' pada navbar yang diklik
    link.classList.add('active');
  });
});


