<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Hammersmith+One|Roboto" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.csshttps://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.css" rel="stylessheet"/>
  <title>Tajam</title>
</head>
<body>
  <div id="overlay">
    <div class="spinner"></div>
  </div>
  <header class="header section" id="home">
    <div class="container">
      <div class="main-nav">
        <div class="logo logo--header"><img src="./img/logo.png" alt="main logo"/></div>
        <div class="icon">
          <div class="icon__middle"></div>
        </div>
        <nav class="main-menu">
          <ul class="main-menu__list">
            <li class="main-menu__item"><a class="main-menu__link" href="#home" data-link="home" id="homelink">Home</a></li>
            <li class="main-menu__item"><a class="main-menu__link" href="#about" data-link="about" id="aboutlink">About</a></li>
            <li class="main-menu__item"><a class="main-menu__link" href="#expertise" data-link="expertise" id="expertiselink">Expertise</a></li>
            <li class="main-menu__item"><a class="main-menu__link" href="#team" data-link="teams" id="teamlink">Teams</a></li>
            <li class="main-menu__item"><a class="main-menu__link" href="#works" data-link="works" id="workslink">Works</a></li>
            <li class="main-menu__item"><a class="main-menu__link" href="#reviews" data-link="peoplesay" id="reviewslink">People say</a></li>
            <li class="main-menu__item"><a class="main-menu__link" href="#contacts" data-link="contact" id="contactslink">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="hero">
        <h1 class="hero__title">We Are Awesome Creative Agency</h1>
        <p class="hero__text">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p><a class="button" href="#learnmore">Learn More</a>
      </div>
    </div>
  </header>
  <section class="about section" data-anchor="about" id="about">
    <div class="container">
      <div class="about__container">
        <div class="about__logo"><img class="about__pic" src="./img/logo2.png"/></div>
        <div class="about__description">
          <h3 class="section__title">Our Story</h3>
          <p class="about__text">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
          <p class="about__text">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.                </p>
          <div class="center"><a class="button" href="#learn more">Learn More</a></div>
        </div>
      </div>
    </div>
  </section>
  <section class="video section">
    <div class="container">
      <div class="video__container"><img src="./img/icons/play-icon.png" alt=""/><span class="video__text">Watch our Story</span></div>
    </div>
  </section>
  <section class="expertise section" id="expertise">
    <div class="container">
      <header class="expertise__header">
        <h3 class="section__title section__title--expertise">Expertise</h3>
        <p class="expertise__text">Lorem ipsum dolor sit amet proin gravida nibh vel velit</p>
      </header>
      <header class="expertise__list">
                <div class="expertise__item"><img class="expertise__img" src="./img/icons/screen.png" alt="photoshop"/>
                  <h3 class="expertise__title">Web design &amp; development</h3>
                  <p class="expertise__text expertise__text--roboto">This is Photoshops version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                </div>
                <div class="expertise__item"><img class="expertise__img" src="./img/icons/paint.png" alt="branding"/>
                  <h3 class="expertise__title">Branding Indentity</h3>
                  <p class="expertise__text expertise__text--roboto">This is Photoshops version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                </div>
                <div class="expertise__item"><img class="expertise__img" src="./img/icons/mobile.png" alt="app"/>
                  <h3 class="expertise__title">Mobile App</h3>
                  <p class="expertise__text expertise__text--roboto">This is Photoshops version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                </div>
                <div class="expertise__item"><img class="expertise__img" src="./img/icons/clock.png" alt="optimization"/>
                  <h3 class="expertise__title">SEARCH ENGINE OPTIMIZATION</h3>
                  <p class="expertise__text expertise__text--roboto">This is Photoshops version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                </div>
                <div class="expertise__item"><img class="expertise__img" src="./img/icons/dendi.png" alt="game"/>
                  <h3 class="expertise__title">Game Development</h3>
                  <p class="expertise__text expertise__text--roboto">This is Photoshops version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                </div>
                <div class="expertise__item"><img class="expertise__img" src="./img/icons/heart.png" alt="love"/>
                  <h3 class="expertise__title">Made with love</h3>
                  <p class="expertise__text expertise__text--roboto">This is Photoshops version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                </div>
      </header>
    </div>
  </section>
  <section class="team section" id="team">
    <div class="container">
      <header class="team__header">
        <h3 class="section__title section__title--team">MEET OUR AMAZING TEAM</h3>
        <p class="team__text">Lorem ipsum dolor sit amet proin gravida nibh vel velit</p>
        <div class="team__list">
                    <div class="team__item"><img class="team__img" src="./img/person.jpg"/>
                      <h4 class="team__name">Semf UCUK</h4>
                      <p class="team__position">CEO &amp; Founder</p>
                    </div>
                    <div class="team__item"><img class="team__img" src="./img/person.jpg"/>
                      <h4 class="team__name">DIK ADALIN</h4>
                      <p class="team__position">engenering</p>
                    </div>
                    <div class="team__item"><img class="team__img" src="./img/person.jpg"/>
                      <h4 class="team__name">Jeng KOl</h4>
                      <p class="team__position">Designer</p>
                    </div>
                    <div class="team__item"><img class="team__img" src="./img/person.jpg"/>
                      <h4 class="team__name">PET ROMAK</h4>
                      <p class="team__position">Marketing</p>
                    </div>
        </div>
      </header><sub class="team__subscription">Become a part of our dream team, let's join us!</sub>
      <div class="center"><a class="button button--center" href="#">We are Hiring</a></div>
    </div>
  </section>
  <section class="works section" id="works">
    <div class="container">
      <div class="works__container">
        <h3 class="works__title">Our works</h3><a class="works__more" href="https://dribbble.com/" target="_blank">See all projects in dribbbble</a>
      </div>
    </div>
    <div class="works__gallery"><img class="works__pic" src="./img/pic.png"/><img class="works__pic" src="./img/pic1.png"/><img class="works__pic" src="./img/pic.png"/><img class="works__pic" src="./img/pic1.png"/><img class="works__pic" src="./img/pic.png"/><img class="works__pic" src="./img/pic1.png"/><img class="works__pic" src="./img/pic.png"/><img class="works__pic" src="./img/pic1.png"/><img class="works__pic" src="./img/pic.png"/><img class="works__pic" src="./img/pic1.png"/><img class="works__pic" src="./img/pic.png"/><img class="works__pic" src="./img/pic1.png"/></div>
    <div class="container">
      <div class="center"><a class="button" href="#">Load More</a></div>
    </div>
  </section>
  <section class="reviews section" id="reviews">
    <div class="container">
      <div class="reviews__container"><img class="reviews__img" src="./img/reviews.png"/>
        <p class="reviews__text">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
        <p class="reviews__person">Jane Galadriel</p>
        <p class="reviews__position">CEO Tenguerere</p><img class="reviews__slider" src="./img/slider.png"/>
      </div>
    </div>
  </section>
  <section class="form section" id="contacts">
    <div class="container">
      <div class="form-main__container">
        <div class="form__container">
          <h2 class="form__title">Give us a good news</h2>
          <form class="form__form" action="order.php" method="POST">
            <div class="form__group-input">
              <input class="form__input" type="text" name="fullname" placeholder="Name"/>
            </div>
            <div class="form__group-input">
              <input class="form__input" type="email" name="email" placeholder="Email"/>
            </div>
            <div class="form__group-input">
              <input class="form__input" type="text" name="subject" placeholder="Subject"/>
            </div>
            <div class="form__group-input">
              <textarea class="form__textarea" placeholder="Your Message"></textarea>
            </div>
            <div class="center">
              <input class="form__button button" type="submit" value="Submit"/>
            </div>
          </form>
        </div>
        <div class="partners__container">
          <h2 class="form__title">Our happy clients</h2>
          <div class="partners__gallery"><img class="partners__img" src="./img/icons/zara.png"/><img class="partners__img" src="./img/icons/mango.png"/><img class="partners__img" src="./img/icons/newyork.png"/><img class="partners__img" src="./img/icons/gucci.png"/><img class="partners__img" src="./img/icons/calvinklein.png"/><img class="partners__img" src="./img/icons/nike.png"/><img class="partners__img" src="./img/icons/converse.png"/><img class="partners__img" src="./img/icons/puma.png"/><img class="partners__img" src="./img/icons/levis.png"/><img class="partners__img" src="./img/icons/Bilabong.png"/></div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer section">
    <div class="container">
      <div class="footer__container">
        <div class="footer-block">
          <div class="logo logo--footer center"><img src="./img/logo.png"/></div>
          <div class="footer__text">lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit. Duis sed odio sit amet auctror a ornare odio non mauris vitae erat in elit</div>
          <ul class="footer__list">
            <li class="footer__item"><a class="footer__item-link" href="#">Help</a></li>
            <li class="footer__item"><a class="footer__item-link" href="#">Terms & Condition</a></li>
            <li class="footer__item"><a class="footer__item-link" href="#">Privacy</a></li>
          </ul>
        </div>
        <div class="footer-block">
          <h3 class="footer__title">Our studio</h3>
          <p class="footer__text footer__text--map">Ruko cucruk, Jl. Radio luar dalem jos No.12 - 13, Kalideres - Jakarta Barat 11480 - Indonesia</p>
          <p class="footer__text footer__text--phone">(+62) 21-2224 3333</p>
        </div>
        <div class="footer-block">
          <h3 class="footer__title">Stay in touch</h3>
          <input class="footer__sub" type="text" placeholder="Subscribe on newsletter"/>
          <input class="footer__submit" type="submit" value=""/>
          <div class="socials">
            <ul class="socials__list">
              <li class="socials__item"><a class="socials__link"><img src="./img/icons/fb.png"/></a></li>
              <li class="socials__item"><a class="socials__link"><img src="./img/icons/tw.png"/></a></li>
              <li class="socials__item"><a class="socials__link"><img src="./img/icons/dribbble.png"/></a></li>
              <li class="socials__item"><a class="socials__link"><img src="./img/icons/in.png"/></a></li>
              <li class="socials__item"><a class="socials__link"><img src="./img/icons/gplus.png"/></a></li>
              <li class="socials__item"><a class="socials__link"><img src="./img/icons/youtube.png"/></a></li>
            </ul>
          </div>
          <div class="footer__copyright">Copyright @ 2015&nbsp;-&nbsp;Tajem&nbsp;Creative</div>
        </div>
      </div>
    </div>
  </footer>
</body>
<script src="<?php bloginfo('stylesheet_directory');?>/app.js"></script>