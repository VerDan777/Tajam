<?php get_header(); ?>
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
      <header class="expertise__list"
      <?php
        // Vars

        $args = array(
            'category_name' => 'expertise-item'
        );
        if(have_posts()) {
            while(have_posts()) {
                the_post();

                // Vars
                $item_title = get_field('item-title');
                $item_img = get_field('item-img');
                $item_text = get_field('item-text');
  
      ?>
                <div class="expertise__item"><img class="expertise__img" src="<?php echo $item_img; ?>" alt="photoshop"/>
                  <h3 class="expertise__title"><?php echo $item_title; ?></h3>
                  <p class="expertise__text expertise__text--roboto"><?php echo $item_text; ?></p>
                </div>

      <?php
        }
      }
      ?>
      </header>
    </div>
  </section>
  <section class="team section" id="team">
    <div class="container">
      <header class="team__header">
        <h3 class="section__title section__title--team">MEET OUR AMAZING TEAM</h3>
        <p class="team__text">Lorem ipsum dolor sit amet proin gravida nibh vel velit</p>
        
        <div class="team__list">
            <?php 
            $args = array(
                'category_name' => 'team-item'
            );

            if(have_posts()) {
                while(have_posts()) {
                    have_posts();

                    $team_name = get_field('team-name');
                    $team_position = get_field('team-position');
                    $team_img = get_field('team-img');
           
        ?>
                    <div class="team__item"><img class="team__img" src="<?php echo $team_img; ?>"/>
                      <h4 class="team__name"><?php echo $team_name; ?></h4>
                      <p class="team__position"><?php echo $team_position; ?></p>
                    </div>
        <?php
                    }
                }
        ?> 
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
<?php get_footer();?>