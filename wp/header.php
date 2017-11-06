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
  <?php wp_head(); ?>
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
      <?php 
        // Vars

        $header_title = get_field("main-title");
        $header_text = get_field("main-text");
      
      ?>
      <div class="hero">
        <h1 class="hero__title"><?php echo $header_title; ?></h1>
        <p class="hero__text"><?php echo $header_text; ?></p><a class="button" href="#learnmore">Learn More</a>
      </div>
        </div>
  </header>