<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--==================== UNICONS ====================-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />

  <!--==================== SWIPER CSS ====================-->
  <link rel="stylesheet" href="/assets/css/styles.css" />

  <!--==================== CSS ====================-->
  <link rel="stylesheet" href="assets/css/styles.css " type="text/css" />

  <title>Haikal Portofolio</title>
</head>

<body>
  <!--==================== HEADER ====================-->
  <header class="header" id="header">
    <nav class="nav container">
      <a href="login.php" target="_blank" class="nav__logo">Haikal Alif</a>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list grid">
          <li class="nav__item">
            <a href="#home" class="nav__link">
              <i class="uil uil-home nav__icon"></i> Home
            </a>
          </li>
          <li class="nav__item">
            <a href="#about" class="nav__link">
              <i class="uil uil-user nav__icon"></i>About
            </a>
          </li>
          <li class="nav__item">
            <a href="#skills" class="nav__link">
              <i class="uil uil-trophy nav__icon"></i>Skills
            </a>
          </li>
          <li class="nav__item">
            <a href="#portfolio" class="nav__link">
              <i class="uil uil-scenery nav__icon"></i>Portfolio
            </a>
          </li>
          <li class="nav__item">
            <a href="#services" class="nav__link">
              <i class="uil uil-briefcase-alt nav__icon"></i>Services
            </a>
          </li>

          <li class="nav__item">
            <a href="#contact" class="nav__link">
              <i class="uil uil-message nav__icon"></i>Contact Me
            </a>
          </li>
        </ul>
        <i class="uil uil-times nav__icon" id="nav__close"></i>
      </div>
      <div class="nav__btns">
        <div class="nav__toggle" id="nav-toggle">
          <i class="uil uil-apps nav__icon"></i>
          </dAiv>
        </div>

    </nav>
  </header>

  <!--==================== MAIN ====================-->
  <main class="main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
      <div class="home__container container grid">
        <div class="home__content grid">
          <div class="home__Social">
            <a href="https://www.linkedin.com/in/haikal-alif-pasya-33803b298?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B2OGBoP4jQvajYGr73Axtzw%3D%3D"
              target="_blank" class="home__Social-icon">
              <i class="uil uil-linkedin home__Social-icon"></i></a>
            <a href="https://www.instagram.com/haikal_alifp00/" target="_blank" class="home__social-icon">
              <i class="uil uil-instagram-alt home__Social-icon"></i></a>
            <a href="https://github.com/HaikalAlifPasya" target="_blank" class="home__social-icon">
              <i class="uil uil-github home__Social-icon"></i></a>
          </div>
          <div class="home__img">
            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <mask id="mask0" mask-type="alpha">
                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                  130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                  97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                  0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
              </mask>
              <g mask="url(#mask0)">
                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                  165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                  129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                  -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                <image class="home__blob-img" x="12" y="" xlink:href="assets/img/profile1.png" />
              </g>
            </svg>
          </div>
        </div>

        <div class="home__data">
          <h1 class="home__title">Hi, I'm Haikal!</h1>
          <h3 class="home__subtitle">Front End Developer</h3>
          <p class="home__description">
            I Can Help You With Your Work With The Best Quality
          </p>
          <a href="#contact" class="button button--flex">
            Contact Me<i class="uil uil-message button__icon"></i>
          </a>
        </div>
        <div class="home__scroll">
          <a href="#about" class="home__scroll-button button--flex">
            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
            <span class="home__scroll-name">Scroll Down</span>
            <i class="uil uil-arrow-down home__scroll-arrow"></i>
          </a>
        </div>
      </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
      <h2 class="section__title">About Me</h2>
      <span class="section__subtitle">My Introduction</span>
      <div class="section__container container grid">
        <img src="assets/img/about1.jpeg" alt="" class="about__img" />
        <div class="about__data">
          <p class="about__description">
            Web Developers, With Half-Way Knowledge, Are Still Students Who
            Do Their Best. Working With Web And UI/UX
          </p>
          <div class="about__info">
            <div>
              <span class="about__info-title">+2</span>
              <span class="about__info-name">Years <br />
                Experience</span>
            </div>
            <div>
              <span class="about__info-title">+12</span>
              <span class="about__info-name">Completed <br />
                Project</span>
            </div>
            <div>
              <span class="about__info-title">+2</span>
              <span class="about__info-name">Companies <br />
                Worked</span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!--==================== SKILLS ====================-->
    <section class="skills section" id="skills">
      <h2 class="section__title">Skills</h2>
      <div class="skills__container container grid">
        <span class="section__subtitle">My Technical Level</span>
        <div>
          <!--==================== SKILLS 1 ====================-->
          <div class="skills__content skills__open">
            <div class="skills__header">
              <i class="uil uil-brackets-curly skills__icon"></i>

              <div>
                <h1 class="skills__titles">Front End Developer</h1>
                <span class="skills__subtitle">Just 2 Years</span>
              </div>

              <i class="uil uil-angle-down skills__arrow"></i>
            </div>

            <div class="skills__list grid">
              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">HTML</h3>
                  <span class="skills__number">80%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__html"></span>
                </div>
              </div>
              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">CSS</h3>
                  <span class="skills__number">50%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__css"></span>
                </div>
              </div>
              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">JavaScript</h3>
                  <span class="skills__number">50%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__js"></span>
                </div>
              </div>
            </div>
          </div><!--==================== SKILLS 2 ====================-->
          <div class="skills__content skills__close">
            <div class="skills__header">
              <i class="uil uil-servers skills__icon"></i>

              <div>
                <h1 class="skills__titles">Back End Developer</h1>
                <span class="skills__subtitle">Just 1,5 Years</span>
              </div>

              <i class="uil uil-angle-down skills__arrow"></i>
            </div>

            <div class="skills__list grid">
              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">PHP</h3>
                  <span class="skills__number">40%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__php"></span>
                </div>
              </div>
              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">Python</h3>
                  <span class="skills__number">70%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__python"></span>
                </div>
              </div>
              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">Node Js</h3>
                  <span class="skills__number">30%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__nodejs"></span>
                </div>
              </div>
            </div>
          </div><!--==================== SKILLS 3 ====================-->
          <div class="skills__content skills__close">
            <div class="skills__header">
              <i class="uil uil-illustration skills__icon"></i>

              <div>
                <h1 class="skills__titles">UI/UX</h1>
                <span class="skills__subtitle">More Than 4 Years</span>
              </div>

              <i class="uil uil-angle-down skills__arrow"></i>
            </div>

            <div class="skills__list grid">
              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">Figma</h3>
                  <span class="skills__number">70%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__figma"></span>
                </div>
              </div>
              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">Photoshop</h3>
                  <span class="skills__number">60%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__photoshop"></span>
                </div>
              </div>
              <div class="skills__data">
                <div class="skills__titles">
                  <h3 class="skills__name">Illustrator</h3>
                  <span class="skills__number">50%</span>
                </div>
                <div class="skills__bar">
                  <span class="skills__percentage skills__illustrator"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==================== QUALIFICATION ====================-->
    <section class="qualification section">
      <h2 class="section__title">Qualification</h2>
      <span class="section__subtitle">My Academic History</span>

      <div class="qualification__container container">
        <div class="qualification__tabs">
          <div class="qualification__button button--flex">
            <i class="uil uil-graduation-cap qualification__icon"></i>
            Education
          </div>
        </div>
        <div class="qualification__sections">
          <!--==================== QUALIFICATION  CONTENT 1 ====================-->
          <div class="qualification__content data qualification__active" data-content id="education">
            <!--==================== QUALIFICATION 1 ====================-->
            <div class="qualification__data">
              <div>
                <h3 class="qualification__title">SDN Mekarsari 03</h3>
                <span class="qualification__subtitle">Bekasi - Tambun Selatan</span>
                <div class="qualification__calendar">
                  <i class="uil uil-calendar-alt"></i>
                  2013 - 2019
                </div>
              </div>

              <div>
                <span class="qualification__rounder"></span>
                <span class="qualification__line"></span>
              </div>
            </div>

            <!--==================== QUALIFICATION 2 ====================-->
            <div class="qualification__data">

              <div></div>


              <div>
                <span class="qualification__rounder"></span>
                <span class="qualification__line"></span>
              </div>


              <div>
                <h3 class="qualification__title">SMP Negeri 1 Tambun Selatan</h3>
                <span class="qualification__subtitle">Bekasi - Tambun Selatan</span>
                <div class="qualification__calendar">
                  <i class="uil uil-calendar-alt"></i>
                  2019 - 2022
                </div>
              </div>


            </div>

            <!--==================== QUALIFICATION 3 ====================-->
            <div class="qualification__data">
              <div>
                <h3 class="qualification__title">SMK Telekomunikasi Telesandi Bekasi</h3>
                <span class="qualification__subtitle">Bekasi - Tambun Selatan</span>
                <div class="qualification__calendar">
                  <i class="uil uil-calendar-alt"></i>
                  2022 - 2025
                </div>
              </div>

              <div>
                <span class="qualification__rounder"></span>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!--==================== PORTFOLIO ====================-->
    <section class="portfolio section" id="portfolio">
      <h2 class="section__title">Portfolio</h2>
      <span class="section__subtitle">Most Recent Work</span>

      <div class="portfolio__container container">
        <div class="swiper-wrapper">
          <!--==================== PORTFOLIO 1 ====================-->
          <div class="portfolio__content grid">
            <img src="assets/img/portfolio1.png" alt="" class="portfolio__img">

            <div class="portfolio__data">
              <h3 class="portfolio__title">Credit Application</h3>
              <p class="portfolio__description">Basically, This is a Borrowing and Lending Application.</p>
              <a href="https://github.com/HaikalAlifPasya/Tugas-Projek" target="blank"
                class="button button--flex button--small portfolio__button">
                Demo
                <i class="uil uil-arrow-right button__icon"></i>
              </a>
            </div>
          </div>
          <!--==================== PORTFOLIO 2 ====================-->
          <div class="portfolio__content grid">
            <img src="assets/img/portfolio2.png" alt="" class="portfolio__img">

            <div class="portflio__data">
              <h3 class="portfolio__title"> Designing Profile Character</h3>
              <p class="portfolio__description"> Designing the Profile of a Character.</p>
              <a href="https://www.figma.com/file/ZNuqz9YixqIjIQO9rSJHkB/Tugas-2-pak%2C-tapi-saya-bikin-portfolio-karakter-ganyu-hehe?type=design&t=yKy45pzpc1zI2U6M-6"
                target="_blank" class="button button--flex button--small portfolio__button">
                Demo
                <i class="uil uil-arrow-right button__icon"></i>
              </a>
            </div>
          </div>
          <!--==================== PORTFOLIO 3 ====================-->
          <div class="portfolio__content grid">
            <img src="assets/img/portfolio3.png" alt="" class="portfolio__img">

            <div class="portflio__data">
              <h3 class="portfolio__title">Personal Profile Website</h3>
              <p class="portfolio__description">Application Personal Profile Using Website</p>
              <a href="#" class="button button--flex button--small portfolio__button">
                Demo
                <i class="uil uil-arrow-right button__icon"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--==================== SERVICES ====================-->
    <section class="services section" id="services">
      <h2 class="section__title">Services</h2>
      <span class="section__subtitle">What I Offer</span>

      <div class="service__container container grid">
        <!--==================== SERVICES 1 ====================-->
        <div class="services__content">
          <div>
            <i class="uil uil-web-grid services__icon"></i>
            <h3 class="services__title">Ui/Ux <br> Designer</h3>
          </div>

          <span class="button button--flex button--small button--link services__buttons">
            View More
            <i class="uil uil-arrow-right button__icon"></i>
          </span>
          <div class="services__modal">
            <div class="services__modal--content">
              <h4 class="services__modal-title">Ui/Ux <br> Designer</h4>
              <i class="uil uil-times services__modal-close"></i>

              <ul class="services__modal-services grid">
                <li class="services__modal-service">
                  <i class="uil uil-check-circle services__modal-icon"></i>
                  <p>I provide innovative and functional UI/UX design services to enhance the user experience of your
                    product. With expertise in designing attractive and intuitive interfaces, I can help optimize
                    navigation and ensure designs are responsive and meet user needs. With a focused approach users, I'm
                    ready to help you create designs that are not only aesthetic, but also improve performance and user
                    satisfaction.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--==================== SERVICES 2 ====================-->
        <div class="services__content">
          <div>
            <i class="uil uil-arrow services__icon"></i>
            <h3 class="services__title">Front End <br> Developer</h3>
          </div>

          <span class="button button--flex button--small button--link services__buttons">
            View More
            <i class="uil uil-arrow-right button__icon"></i>
          </span>
          <div class="services__modal">
            <div class="services__modal--content">
              <h4 class="services__modal-title">Front End <br> Developer</h4>
              <i class="uil uil-times services__modal-close"></i>

              <ul class="services__modal-services grid">
                <li class="services__modal-service">
                  <i class="uil uil-check-circle services__modal-icon"></i>
                  <p>I am a Front-end Developer skilled in designing and developing attractive and responsive user
                    interfaces. With a focus on optimal user experience, I ensure that every design element works in
                    harmony to provide intuitive navigation. From programming HTML, CSS, to using frameworks like React
                    or Vue, I'm ready to support your project with solid Front-end skills.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--==================== SERVICES 3 ====================-->
        <div class="services__content">
          <div>
            <i class="uil uil-server-network-alt services__icon"></i>
            <h3 class="services__title">Back End <br> Developer</h3>
          </div>

          <span class="button button--flex button--small button--link services__buttons">
            View More
            <i class="uil uil-arrow-right button__icon"></i>
          </span>
          <div class="services__modal">
            <div class="services__modal--content">
              <h4 class="services__modal-title">Back End <br> Developer</h4>
              <i class="uil uil-times services__modal-close"></i>

              <ul class="services__modal-services grid">
                <li class="services__modal-service">
                  <i class="uil uil-check-circle services__modal-icon"></i>
                  <p>As a Back-end Developer, I bring expertise in building robust system structures and functions. With
                    in-depth knowledge of server-side programming languages such as Java, Python, or Node.js, I am
                    responsible for compiling application logic, managing databases, and ensuring overall application
                    performance. With extensive experience in the Back-end field, I am ready to be a reliable
                    development partner for your project.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!--==================== CONTACT ME ====================-->
    <section class="contact section" id="contact">
      <h2 class="section__title">Contact Me</h2>
      <span class="section__subtitle">Get In touch</span>

      <div class="contact__container container grid">
        <div>
          <div class="contact__information">
            <i class="uil uil-phone contact__icon"></i>

            <div>
              <h3 class="contact__title">Call Me</h3>
              <span class="contact__subtitle">+62 895-0423-9548</span>
            </div>
          </div>
          <div class="contact__information">
            <i class="uil uil-envelope contact__icon"></i>

            <div>
              <h3 class="contact__title">Email</h3>
              <span class="contact__subtitle">haikalalifpasya1267@gmail.com</span>
            </div>
          </div>
        </div>

        <form action="feedbackpro.php" class="contact__form grid" method="POST">
          <div class="contact__inputs grid">
            <div class="contact__content">
              <label for="" class="contact__label">Name:</label>
              <input type="text" name="Nama" class="contact__input">
            </div>
            <div class="contact__content">
              <label for="" class="contact__label">Email:</label>
              <input type="email" name="Email" class="contact__input">
            </div>
            <div class="contact__content">
              <label for="" class="contact__label">Message:</label>
              <textarea name="Message" id="" cols="0" rows="7" class="contact__input"></textarea>
            </div>
            <button type="submit" name="send" class="button button--flex">
              <i class="uil uil-message button__icon">SEND</i></button>
            <div>
              <!-- <a href="#" class="button button--flex">
                Send Message
                <i class="uil uil-message button__icon"></i> -->
              </a>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>

  <!--==================== FOOTER ====================-->
  <footer class="footer">
    <div class="footer__bg">
      <div class="footer__container container grid">
        <div>
          <h1 class="footer__title">Haikal Alif Pasya</h1>
          <span class="footer__subtitle">Front End Developer</span>
        </div>

        <ul class="footer__links">
          <li>
            <a href="#services" class="footer__link">Services</a>
          </li>
          <li>
            <a href="#portfolio" class="footer__link">Portfolio</a>
          </li>
          <li>
            <a href="#contact" class="footer__link">Contact Me</a>
          </li>
        </ul>

        <div class="footer__socials">
          <a href="https://www.instagram.com/haikal_alifp00/" target="_blank" class="footer__social">
            <i class="uil uil-instagram"></i>
          </a>
          <a href="https://www.linkedin.com/in/haikal-alif-pasya-33803b298?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B2OGBoP4jQvajYGr73Axtzw%3D%3D" target="_blank" class="footer__social">
            <i class="uil uil-linkedin"></i>
          </a>
        </div>
      </div>
      <p class="footer__copy">&#169 Haikal All Right Reserved</p>
    </div>
  </footer>

  <!--==================== SCROLL TOP ====================-->
  <a href="#" class="scrollup" id="scroll-up">
    <i class="uil uil-arrow-up scroll-up__icon"></i>
  </a>
  <!--==================== SWIPER JS ====================-->
  <script src="/assets/js/swiper-bundle.min.js"></script>

  <!--==================== MAIN JS ====================-->
  <script src="assets/js/main.js"></script>
</body>

</html>