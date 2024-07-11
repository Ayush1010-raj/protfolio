<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assests/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <title>Portfolio</title>
</head>
<body>
 
    <div class="nav__toggle" id="nav__toggle">
        <i class="uil uil-bars"></i>
    </div>
    <aside class="sidebar" id="sidebar">
        <nav class="nav">
            <div class="nav__logo">
                <a href="index.html" class="nav__logo-text">M</a>
            </div>
            <div class="nav__menu">
                <div class="menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">Skills</a>
                        </li>
                        <li class="nav__item">
                            <a href="#work" class="nav__link">Works</a>
                        </li>
                        <li class="nav__item">
                            <a href="#services" class="nav__link">Services</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="btn__share">
                <i class="uil uil-share-alt social__share"></i>
            </div>

            <div class="nav__close" id="nav__close">
                <i class="uil uil-times"></i>
            </div>
        </nav>
    </aside>
 <main class="main">
    <section class="home" id="home">
        <div class="home__container container grid">
            <div class="home__social">
                <span class="home__social-follow">Follow Me</span>
                <div class="home__social-links">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                        <i class="uil uil-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="home__social-link">
                        <i class="uil uil-twitter"></i>
                    </a>
                </div>
            </div>
            <img src="assests/img/first.png.jpeg" alt="" class="home__img">

            <div class="home__data">
                <h1 class="home__title">Hi, I'am Ayush</h1>
                <h3 class="home__subtitle">Fullstack Developer</h3>
                <p class="home__description">Just a beginner in web design and development knowledge, producing quality works</p>
                <a href="#about" class="button"><i class="uil uil-user button__icon"></i>
                More about me
                </a>

            </div>

            <div class="my__info">
                <div class="info__item">
                    <i class="uil uil-facebook-messenger info__icon"></i>

                    <div>
                        <h3 class="info__title">Messenger</h3>
                        <span class="info__subtitle">a.bc</span>
                    </div>
                </div>

                <div class="info__item">
                    <i class="uil uil-whatsapp info__icon"></i>

                    <div>
                        <h3 class="info__title">Whatsapp</h3>
                        <span class="info__subtitle">9835-087-544</span>
                    </div>
                </div>

                <div class="info__item">
                    <i class="uil uil-envelope info__icon"></i>

                    <div>
                        <h3 class="info__title">Email</h3>
                        <span class="info__subtitle">ayush1010raj@gmail.com</span>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <section class="about section" id="about">
        <h2 data-heading="My Intro" class="section__title">About Me</h2>

        <div class="about__container container grid">
            <img src="assests/img/home-bg1.jpeg" alt="" class="about__img">

            <div class="about__data">
                <h3 class="about__heading">Hi, I'm Ayush Raj, Based in India</h3>
                <p class="about__description">Web developer, with extensive knowledge and years of experience,
                    working in web technologies and Ui / Ux design, delivering quality work.</p>
                <div class="about__info grid">
                    <div class="about__box">
                        <i class="uil uil-award about__icon"></i>
                        <h3 class="about__title">Experience</h3>
                        <span class="about__subtitle">2 + Years</span>
                    </div>

                    <div class="about__box">
                        <i class="uil uil-suitcase-alt about__icon"></i>
                        <h3 class="about__title">Completed</h3>
                        <span class="about__subtitle">6 + Projects</span>
                    </div>

                    <div class="about__box">
                        <i class="uil uil-headphones-alt about__icon"></i>
                        <h3 class="about__title">Support</h3>
                        <span class="about__subtitle">Online 24/7</span>
                    </div>
                </div>
                <a href="#contact" class="button"><i class="uil uil-navigator"></i>
                Contact Me
                </a>
            </div>
        </div>
    </section>

    <section class="qualification section">
        <h2 data-heading="My Journey" class="section__title">Qualification</h2>

        <div class="qualification__container container grid">
            <div class="education">
                <h3 class="qualification__title">
                    <i class="uil uil-graduation-cap"></i> Education
                </h3>
                <div class="timeline">
                    <div class="timeline__item">
                        <div class="circle__dot"></div>
                        <h3 class="timeline__title">B.P. Poddar Institute of Management and Technology</h3>
                        <p class="timeline__text">B.tech in CSE</p>
                        <span class="timeline__date"><i class="uil uil-calendar-alt"></i>
                        2022-2026
                        </span>
                    </div> 

                    <div class="timeline__item">
                        <div class="circle__dot"></div>
                        <h3 class="timeline__title">A.N College</h3>
                        <p class="timeline__text">Intermediate</p>
                        <span class="timeline__date"><i class="uil uil-calendar-alt"></i>
                        2020-2022
                        </span>
                    </div>

                    <div class="timeline__item">
                        <div class="circle__dot"></div>
                        <h3 class="timeline__title">Shivam International</h3>
                        <p class="timeline__text">Matriculation</p>
                        <span class="timeline__date"><i class="uil uil-calendar-alt"></i>
                        2020
                        </span>
                    </div>
                </div>
            </div>

            <div class="experience">
                <h3 class="qualification__title">
                    <i class="uil uil-briefcase-alt"></i> Experience
                </h3>
                <div class="timeline">
                    <div class="timeline__item">
                        <div class="circle__dot"></div>
                        <h3 class="timeline__title"></h3>
                        <p class="timeline__text"></p>
                        <span class="timeline__date"><i class="uil uil-calendar-alt"></i>
                        2013-present
                        </span>
                    </div> 

                    <div class="timeline__item">
                        <div class="circle__dot"></div>
                        <h3 class="timeline__title"></h3>
                        <p class="timeline__text"></p>
                        <span class="timeline__date"><i class="uil uil-calendar-alt"></i>
                        2013-present
                        </span>
                    </div>

                    <div class="timeline__item">
                        <div class="circle__dot"></div>
                        <h3 class="timeline__title"></h3>
                        <p class="timeline__text"></p>
                        <span class="timeline__date"><i class="uil uil-calendar-alt"></i>
                        2013-present
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skills section" id="skills">
        <h2 data-heading="My Abilities"class="section__title">My Experience</h2>

        <div class="skills__container container grid">
            <div class="skills__tabs">
                <div class="skills__header skills__active"data-target="#frontend">
                    <i class="uil uil-brackets-curly skills__icon"></i>
                    <div>
                        <h1 class="skills__title">Frontend Developer</h1>
                        <span class="skills__subtitle">More than 1 year</span>
                    </div>

                    <i class="uil uil-angle-down skills__arrow"></i>
                </div>

                <div class="skills__header"data-target="#design">
                    <i class="uil uil-swatchbook skills__icon"></i>
                    <div>
                        <h1 class="skills__title">Ui / Ux Designer</h1>
                        <span class="skills__subtitle">Beginner</span>
                    </div>

                    <i class="uil uil-angle-down skills__arrow"></i>
                </div>

                <div class="skills__header"data-target="#backend">
                    <i class="uil uil-server-network skills__icon"></i>
                    <div>
                        <h1 class="skills__title">Backend Developer</h1>
                        <span class="skills__subtitle">4 Months</span>
                    </div>

                    <i class="uil uil-angle-down skills__arrow"></i>
                </div>
            </div>

            <div class="skills__content">
                <div class="skills__group skills__active"data-content id="frontend">
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">CSS</h3>
                                <span class="skills__number">80%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width:80%;"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">JavaScript</h3>
                                <span class="skills__number">70%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width:70%;"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">React</h3>
                                <span class="skills__number">75%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width:75%;"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">HTML</h3>
                                <span class="skills__number">90%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width:90%;"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skills__group"data-content id="design">
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Figma</h3>
                                <span class="skills__number">80%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width:80%;"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Sketch</h3>
                                <span class="skills__number">70%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width:70%;"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Photoshop</h3>
                                <span class="skills__number">75%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width:75%;"></span>
                            </div>
                        </div>

                        
                    </div>
                </div>

                <div class="skills__group"data-content id="backend">
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">PHP</h3>
                                <span class="skills__number">50%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width:50%;"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Python</h3>
                                <span class="skills__number">70%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width:70%;"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">MySQL</h3>
                                <span class="skills__number">75%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width:75%;"></span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Firebase</h3>
                                <span class="skills__number">90%</span>
                            </div>

                            <div class="skills__bar">
                                <span class="skills__percentage" style="width:90%;"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work section" id="work">
        <h2 data-heading="My Portfolio"class="section__title">Recent Works</h2>

        <div class="work__filters">
            <span class="work__item active-work"data-filter="all">All</span>
            <span class="work__item"data-filter=".web">Web</span>
            <span class="work__item"data-filter=".app">App</span>
            <span class="work__item"data-filter=".design">Design</span>
        </div>

        <div class="work__container container grid">
            <div class="work__card mix web">
                <img src="assests/img/work-1.webp" alt="" class="work__img">
                <h3 class="work__title">Web Design</h3>
                <span class="work__button">Demo
                    <i class="uil uil-arrow-right work__button-icon"></i>
                </span>
                <div class="portfolio__item-details">
                    <h3 class="details__title">The services provide for design</h3>
                    <p class="details__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, sed veritatis. Adipisci.</p>
                    <ul class="details__info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>technologies - <span>html css</span></li>
                        <li>Role - <span>frontend</span></li>
                        <li>View - <span><a href="#">www.domain.com</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work__card mix app">
                <img src="assests/img/work-2.webp" alt="" class="work__img">
                <h3 class="work__title">App Design</h3>
                <span class="work__button">Demo
                    <i class="uil uil-arrow-right work__button-icon"></i>
                </span>
                <div class="portfolio__item-details">
                    <h3 class="details__title">Mobile app landing design & app maintain</h3>
                    <p class="details__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, sed veritatis. Adipisci.</p>
                    <ul class="details__info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>technologies - <span>html css</span></li>
                        <li>Role - <span>frontend</span></li>
                        <li>View - <span><a href="#">www.domain.com</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work__card mix design">
                <img src="assests/img/work-3.webp" alt="" class="work__img">
                <h3 class="work__title">Brand Desing</h3>
                <span class="work__button">Demo
                    <i class="uil uil-arrow-right work__button-icon"></i>
                </span>
                <div class="portfolio__item-details">
                    <h3 class="details__title">Logo design creativity & Application</h3>
                    <p class="details__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, sed veritatis. Adipisci.</p>
                    <ul class="details__info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>technologies - <span>html css</span></li>
                        <li>Role - <span>frontend</span></li>
                        <li>View - <span><a href="#">www.domain.com</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work__card mix app">
                <img src="assests/img/work-4.webp" alt="" class="work__img">
                <h3 class="work__title">App Design</h3>
                <span class="work__button">Demo
                    <i class="uil uil-arrow-right work__button-icon"></i>
                </span>
                <div class="portfolio__item-details">
                    <h3 class="details__title">Mobile app landing design & Services </h3>
                    <p class="details__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, sed veritatis. Adipisci.</p>
                    <ul class="details__info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>technologies - <span>html css</span></li>
                        <li>Role - <span>frontend</span></li>
                        <li>View - <span><a href="#">www.domain.com</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work__card mix web">
                <img src="assests/img/work-5.webp" alt="" class="work__img">
                <h3 class="work__title">Brand Design</h3>
                <span class="work__button">Demo
                    <i class="uil uil-arrow-right work__button-icon"></i>
                </span>
                <div class="portfolio__item-details">
                    <h3 class="details__title">Design for technology & services</h3>
                    <p class="details__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, sed veritatis. Adipisci.</p>
                    <ul class="details__info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>technologies - <span>html css</span></li>
                        <li>Role - <span>frontend</span></li>
                        <li>View - <span><a href="#">www.domain.com</a></span></li>
                    </ul>
                </div>
            </div>

            <div class="work__card mix design">
                <img src="assests/img/work-6.webp" alt="" class="work__img">
                <h3 class="work__title">Web Design</h3>
                <span class="work__button">Demo
                    <i class="uil uil-arrow-right work__button-icon"></i>
                </span>
                <div class="portfolio__item-details">
                    <h3 class="details__title">App for technology & services</h3>
                    <p class="details__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, sed veritatis. Adipisci.</p>
                    <ul class="details__info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>technologies - <span>html css</span></li>
                        <li>Role - <span>frontend</span></li>
                        <li>View - <span><a href="#">www.domain.com</a></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<div class="portfolio__popup">
    <div class="portfolio__popup-inner">
        <div class="portfolio__popup-content grid">
            <span class="portfolio__popup-close"><i class="uil uil-times"></i></span>
            <div class="pp__thumbnail">
                <img src="assests/img/work-6.webp" alt="" class="portfolio__popup-img">
            </div>
            <div class="portfolio__popup-info">
                <div class="portfolio__popup-subtitle">Featured - <span>Design</span></div>
                <div class="portfolio__popup-body">
                    <h3 class="details__title">App for technology & services</h3>
                    <p class="details__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, sed veritatis. Adipisci.</p>
                    <ul class="details__info">
                        <li>Created - <span>4 dec 2020</span></li>
                        <li>technologies - <span>html css</span></li>
                        <li>Role - <span>frontend</span></li>
                        <li>View - <span><a href="#">www.domain.com</a></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="services section"id="services">
    <h2 data-heading="Services" class="section__title">What I Offer</h2>

    <div class="services__container container grid">
        <div class="services__content">
            <div>
                <i class="uil uil-web-grid services__icon"></i>
                <h3 class="services__title">Web <br>Designer</h3>
            </div>

            <span class="services__button">
                View More <i class="uil uil-arrow-right services__button-icon"></i>
            </span>


            <div class="services__modal">
                <div class="services__modal-content">
                    <i class="uil uil-times services__modal-close"></i>

                    <h3 class="services__modal-title">Web Designer</h3>
                    <p class="services__modal-description">Services with more than 1 years of experience. Providing quality work to clients and companies.</p>
                    <ul class="services__modal-services grid">
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p class="services__modal-info">I develop the user interface.</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p class="services__modal-info">Web page development</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p class="services__modal-info">I create ux element interactions.</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p class="services__modal-info">I position your company brand.</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p class="services__modal-info">Design and mockups of products for companies.</p>
                        </li>   
                    </ul>
                </div>
            </div>
        </div>

        <div class="services__content">
            <div>
                <i class="uil uil-arrow services__icon"></i>
                <h3 class="services__title">UI/UX <br>Designer</h3>
            </div>

            <span class="services__button">
                View More <i class="uil uil-arrow-right services__button-icon"></i>
            </span>


            <div class="services__modal">
                <div class="services__modal-content">
                    <i class="uil uil-times services__modal-close"></i>

                    <h3 class="services__modal-title">UI/UX Designer</h3>
                    <p class="services__modal-description">Services with more than 1 years of experience. Providing quality work to clients and companies.</p>
                    <ul class="services__modal-services grid">
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p class="services__modal-info">I develop the user interface.</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p class="services__modal-info">Web page development</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p class="services__modal-info">I create ux element interactions.</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p class="services__modal-info">I position your company brand.</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p class="services__modal-info">Design and mockups of products for companies.</p>
                        </li>   
                    </ul>
                </div>
            </div>
        </div>

        <div class="services__content">
            <div>
                <i class="uil uil-edit services__icon"></i>
                <h3 class="services__title">Branding <br>Designer</h3>
            </div>

            <span class="services__button">
                View More <i class="uil uil-arrow-right services__button-icon"></i>
            </span>

            <div class="services__modal">
                <div class="services__modal-content">
                    <i class="uil uil-times services__modal-close"></i>

                    <h3 class="services__modal-title">Branding Designer</h3>
                    <p class="services__modal-description">Services with more than 1 years of experience. Providing quality work to clients and companies.</p>
                    <ul class="services__modal-services grid">
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p class="services__modal-info">I develop the user interface.</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p class="services__modal-info">Web page development</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p class="services__modal-info">I create ux element interactions.</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p class="services__modal-info">I position your company brand.</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p class="services__modal-info">Design and mockups of products for companies.</p>
                        </li>   
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials section">
    <h2 data-heading="My clients say" class="section__title">Testimonials</h2>
    <div class="testimonials__container container swiper">
        <div class="swiper-wrapper">
            <div class="testimonial__card swiper-slide">
                <div class="testimonial__quote">
                    <i class='bx bxs-quote-alt-left'></i>
                </div>
                <p class="testimonial__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi officiis eveniet eaque!</p>
                <h3 class="testimonial__date">March 27. 2020</h3>
                <div class="testimonial__profile">
                    <img src="assests/img/client1.jpg" alt="" class="testimonial__profile-img">
                    <div class="testimonial__profile-data">
                        <span class="testimonial__profile-name">Lee Doe</span>
                        <span class="testimonial__profile-detail">Director</span>
                    </div>
                </div>
            </div>

            <div class="testimonial__card swiper-slide">
                <div class="testimonial__quote">
                    <i class='bx bxs-quote-alt-left'></i>
                </div>
                <p class="testimonial__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi officiis eveniet eaque!</p>
                <h3 class="testimonial__date">March 27. 2020</h3>
                <div class="testimonial__profile">
                    <img src="assests/img/client2.jpg" alt="" class="testimonial__profile-img">
                    <div class="testimonial__profile-data">
                        <span class="testimonial__profile-name">Lee Doe</span>
                        <span class="testimonial__profile-detail">Director</span>
                    </div>
                </div>
            </div>

            <div class="testimonial__card swiper-slide">
                <div class="testimonial__quote">
                    <i class='bx bxs-quote-alt-left'></i>
                </div>
                <p class="testimonial__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi officiis eveniet eaque!</p>
                <h3 class="testimonial__date">March 27. 2020</h3>
                <div class="testimonial__profile">
                    <img src="assests/img/client3.jpg" alt="" class="testimonial__profile-img">
                    <div class="testimonial__profile-data">
                        <span class="testimonial__profile-name">Lee Doe</span>
                        <span class="testimonial__profile-detail">Director</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="contact section" id="contact">
    <h2 data-heading="Get in touch" class="section__title">Contact Me</h2>
    <div class="contact__container container grid">
        <div class="contact__content">
            <div class="contact__info">
                <div class="contact__card">
                    <i class="uil uil-envelope-edit contact__card-icon"></i>
                    <h3 class="contact__card-title">Email</h3>
                    <span class="contact__card-data">ayush1010raj@gmail.com</span>
                    <span class="contact__button">
                        Write me <i class="uil uil-arrow-right contact__button-icon"></i>
                    </span>
                </div>

                <div class="contact__card">
                    <i class="uil uil-whatsapp contact__card-icon"></i>
                    <h3 class="contact__card-title">Whatsapp</h3>
                    <span class="contact__card-data">9835087544</span>
                    <span class="contact__button">
                        Write me <i class="uil uil-arrow-right contact__button-icon"></i>
                    </span>
                </div>

                <div class="contact__card">
                    <i class="uil uil-facebook-messenger contact__card-icon"></i>
                    <h3 class="contact__card-title">Messenger</h3>
                    <span class="contact__card-data">ayush1010raj@gmail.com</span>
                    <span class="contact__button">
                        Write me <i class="uil uil-arrow-right contact__button-icon"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="contact__content">
        <?php
    // Check if form data is submitted via POST method
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $Phone = isset($_POST['Phone']) ? $_POST['Phone'] : '';
        $Message = isset($_POST['Message']) ? $_POST['Message'] : '';

        // Database connection
        $servername = "sql307.infinityfree.com";
    $username = "if0_36884004";
    $password = "OOcdUY1XV4ob";
    $database = "if0_36884004_test";
    $port = 3306; // optional, default MySQL port

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);
        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO test (Username, email, Phone, Message) VALUES (?, ?, ?, ?)");
        // Bind parameters
        $stmt->bind_param("ssss", $Username, $email, $Phone, $Message);

        // Execute the statement
        $execval = $stmt->execute();
        
        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="contact__form">
                <div class="input__container">
                    <input type="text" name="Username" placeholder="Username" class="input" onclick="clearPlaceholder(this)">
                    <span>Username</span>
                </div>
                <div class="input__container">
                    <input type="email" name="email" placeholder="email" class="input" onclick="clearPlaceholder(this)">
                   
                    <span>email</span>
                </div>
                <div class="input__container">
                    <input type="tel" name="Phone" placeholder="Phone" class="input" onclick="clearPlaceholder(this)">
                    <span>Phone</span>
                </div>
                <div class="input__container textarea">
                   <textarea name="Message" placeholder="Message" class="input" onclick="clearPlaceholder(this)"></textarea>
                    <span>Message</span>
                </div>
                <button type="submit" class="button"><i class="uil uil-navigator button__icon"></i>
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer__bg">
        <div class="footer__container container grid">
            <div>
                <h1 class="footer__title">Ayush</h1>
                <span class="footer__subtitle">Frontend developer</span>
            </div>
            <ul class="footer__links">
                <li>
                    <a href="#services" class="footer__link">Services</a>
                </li>
                <li>
                    <a href="#work" class="footer__link">Work</a>
                </li>
                <li>
                    <a href="#contact" class="footer__link">Contact</a>
                </li>
            </ul>
            <div class="footer__socials">
                <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                    <i class="uil uil-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                    <i class="uil uil-instagram"></i>
                </a>
                <a href="https://twitter.com/" target="_blank" class="footer__social">
                    <i class="uil uil-twitter"></i>
                </a>
            </div>
        </div>

        <p class="footer__copy">&#169; Crypticalcoder. All right reserved</p>
    </div>
</footer>

 </main>
 
 <script>
        // JavaScript function definition
        function clearPlaceholder(element) {
            if (element.value === element.placeholder) {
                element.value = ''; // Clear the input value
            }
        }
    </script>
 <script src="assests/js/mixitup.min.js"></script>
 <script src="assests/js/swiper-bundle.min.js"></script>
 <script src="assests/js/main.js"></script>

</body>
</html>