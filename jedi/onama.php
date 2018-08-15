<?php include_once "config.php" ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "add/head.php" ?>
    <style>
    
.about-the-author {
  background-color: #cacaca2e;
  padding: 1rem;
  
}

.about-the-author .separator-left {
  text-align: left;
}

.about-the-author .separator-left::before, .about-the-author .separator-left::after {
  display: table;
  content: ' ';
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-order: 1;
      -ms-flex-order: 1;
          order: 1;
}

.about-the-author .separator-left::after {
  clear: both;
}

.about-the-author .separator-left::after {
  position: relative;
  width: 5rem;
  border-bottom: 0.125rem solid #1779ba;
  margin: 0.3rem auto 0;
  margin-left: 0;
}

.about-the-author .author-title {
  text-align: center;
}

.about-the-author .author-social {
  text-align: center;
  margin-top: 0.7rem;
  margin-bottom: 0.7rem;
}

.about-the-author .author-social .fa-stack {
  display: inline-block;
}

.about-the-author .author-social .fa-stack.facebook {
  color: #4c70ba;
}

.about-the-author .author-social .fa-stack.facebook:hover, .about-the-author .author-social .fa-stack.facebook:focus {
  color: #3b5998;
}

.about-the-author .author-social .fa-stack.twitter {
  color: #83c3f3;
}

.about-the-author .author-social .fa-stack.twitter:hover, .about-the-author .author-social .fa-stack.twitter:focus {
  color: #55acee;
}

.about-the-author .author-social .fa-stack.linkedin {
  color: #009ee8;
}

.about-the-author .author-social .fa-stack.linkedin:hover, .about-the-author .author-social .fa-stack.linkedin:focus {
  color: #007bb5;
}

.about-the-author .author-image {
  border: 1px solid #cacaca;
}


    </style>
  </head>
  <body>
    <div class="grid-container">
      
    <?php include_once "add/heading.php" ?>

    <?php include_once "add/menu.php" ?>


  	<div class="about-the-author">
  <h3 class="author-title">O nama..</h3>
  <div class="row">
    <div class="small-12 medium-8 columns">
      <h4 class="separator-left">Jedi</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores eum, iusto vel repudiandae, quaerat soluta sequi officia. Blanditiis atque, illo eaque sint in architecto illum nostrum repudiandae labore tenetur! Eaque impedit pariatur odio ad ipsum qui aspernatur dolorem consequuntur a molestias nisi, quae voluptatem expedita, inventore voluptatibus dolores, veritatis corporis facilis laudantium explicabo vero! Non hic quia facilis blanditiis eum.</p>
    </div>
  </div>
  <div class="small-12 medium-8 columns">
      <div class="author-social">
        <a href="#">
          <span class="fa-stack fa-lg facebook">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
          </span>
        </a>
  
        <a href="#">
          <span class="fa-stack fa-lg linkedin">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
          </span>
        </a>
      </div>
    </div>
</div>



    <?php include_once "add/podnozje.php" ?>

    <?php include_once "add/script.php" ?>
  </body>
</html>
