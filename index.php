<!DOCTYPE HTML>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Alex Beloshevsky's portfolio webpage, showcasing his capabilities as a front-end developer using modern technologies such as HTML5, CSS3 and JavaScript">

    <link rel="icon" href="/resources/favicon/favicon.png">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <title>Alex Beloshevsky - Portfolio</title>
  </head>

  <body>
    <header id="header">
      <nav>
        <div class="row">
          <p class="logo">Alex Beloshevsky</p>
          <a href="#header"><p class="logo-black">Alex Beloshevsky</p></a>
          <ul class="main-nav js--main-nav">
            <li><a href="#bio">Who I am</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#form">Contact me</a></li>
          </ul>
          <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
        </div>
      </nav>
      <div class="hero-text-box">
        <h1>A junior front-end dev.<br>With 4 years of marketing experience.</h1>
        <a class="btn btn-full js--scroll-to-bio" href="#bio">Biography</a>
        <a class="btn btn-ghost js--scroll-to-projects" href="#projects">Projects</a>
      </div>
    </header>
      
    <section class="section-bio js--section-bio" id="bio">
      <div class="row">
        <h2>A Junior web developer with marketing experience</h2>
        <p class="long-copy">
                Hello, I'm Alex, your new junior front-end developer. I have taught myself front-end technologies such as HTML5, CSS3, JavaScript and jQuery using the power of the internet. I also bring with me extansive online marketing experience handling PPC budgets in the USD 6 figure range (monthly).
        </p>
      </div>

      <div class="row js--wp-1">
        <div class="col span-1-of-4 box">
          <i class="ion-social-html5-outline icon-big"></i>
          <h3>modern web technologies</h3>
          <p>
          I have built this website in order to showcase my abilities, using modern web technologies. I tried to use as little frameworks and plugins as possible so this website is built using HTML5, CSS3, JavaScript and jQuery as I have learned while studying by myself.
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <i class="ion-social-github-outline icon-big"></i>
          <h3>Self learning &mdash; projects</h3>
          <p>
          I believe that the best way to learn is by experimentation, and I have therefore made it a priority to learn by building front-end projects. The next section shows several of my projects with brief explanations on the techniques used and lessons I have learned.
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <i class="ion-social-usd-outline icon-big"></i>
          <h3>High budget PPC and funnel optimization</h3>
          <p>
          for the last 4 years I have been managing very large scale Adwords PPC campaigns in the American, European and Israeli markets. I also have experience with marketing on Facebook and GDN (but in smaller scales) and with funnel optimization through rigorous a/b testing.  
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <i class="ion-connection-bars icon-big"></i>
          <h3>The future - PHP and more projects</h3>
          <p>
          I believe that life is full of learning opportunities. In the near future I plan on deepening my knowledge by taking a course on PHP and trying to build more and larger projects. Perhaps a website which allows famalies to share and edit together shopping lists?
          </p>
        </div>
      </div>
    </section>
      
    <section class="section-projects js--section-projects" id="projects">
      <div class="row">
        <h2>A selection of my past projects &mdash; Click to see them</h2>
      </div>
      <div class="row js--wp-2">
        <a href="./projects/project1.html" target="_blank">  
          <div class="col span-1-of-4 box">
            <i class="ion-ios-list-outline icon-big"></i>
            <h3>To-Do list</h3>
            <div class="project-feature">
            <i class="ion-android-done icon-small"></i>
            DOM Manipulation
            </div>
            <div class="project-feature">
            <i class="ion-android-done icon-small"></i>
            jQuery events
            </div>
            <div class="project-feature">
            <i class="ion-android-done icon-small"></i>
            Event listener
            </div>
          </div>
        </a>
        <a href="./projects/project2.html" target="_blank">  
          <div class="col span-1-of-4 box">
            <i class="ion-ios-partlysunny-outline icon-big"></i>
            <h3>Localized Weather</h3>
            <div class="project-feature">
            <i class="ion-android-done icon-small"></i>
            Browser geolocation
            </div>
            <div class="project-feature">
            <i class="ion-android-done icon-small"></i>
            API connection
            </div>
            <div class="project-feature">
            <i class="ion-android-done icon-small"></i>
            JSON
            </div>
          </div>
          </a>
        <a href="./projects/project3.html" target="_blank">  
          <div class="col span-1-of-4 box">
            <i class="ion-ios-search icon-big"></i>
            <h3>Wiki search-engine</h3>
            <div class="project-feature">
            <i class="ion-android-done icon-small"></i>
            API connection
            </div>
            <div class="project-feature">
            <i class="ion-android-done icon-small"></i>
            jQuery events
            </div>
            <div class="project-feature">
            <i class="ion-android-done icon-small"></i>
            JSON
            </div>
          </div>
        </a>
        <a href="./projects/project4.html" target="_blank">  
          <div class="col span-1-of-4 box">
            <i class="ion-ios-chatboxes-outline icon-big"></i>
            <h3>Quote generator</h3>
            <div class="project-feature">
            <i class="ion-android-done icon-small"></i>
            Random result
            </div>
            <div class="project-feature">
            <i class="ion-android-done icon-small"></i>
            Twitter API connection
            </div>
            <div class="project-feature">
            <i class="ion-android-done icon-small"></i>
            jQuery events
            </div>
          </div>
        </a>
      </div>
    </section>

    <div class="form-box" id="form">  
      <div class="row">
        <h2>Feel free to contact me</h2>
      </div>
      <div class="row">
        <form method="post" action="mailer.php" class="contact-form">
          <div class="row">
            <?php
              if ($_GET['success'] == 1) {
                echo '<div class="form-messages success">Thank you! Your message has been sent.</div>'; 
              }
              if ($_GET['success'] == -1) {
                echo '<div class="form-messages error">Oops! Something went wrong. please try again!</div>'; 
              }
            ?>
          </div>
          <div class="row">  
            <div class="col span-1-of-3">
              <label for="name">Name</label>
            </div>
            <div class="col span-2-of-3">
              <input type="text" name="name" id="name" placeholder="Your name" required>
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label for="email">Email</label>
            </div>
            <div class="col span-2-of-3">
              <input type="email" name="email" id="email" placeholder="Your email" required>
            </div> 
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label>Your message</label>
            </div>
            <div class="col span-2-of-3">
              <textarea name="message" placeholder="Your message"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label>&nbsp;</label>
            </div>
            <div class="col span-2-of-3">
              <input type="submit" value="Send it!">
            </div>
          </div>
        </form>
        <div class="row">
          <div class="col span-1-of-3"></div>
          <div class="col span-2-of-3">
            * I can also be reached at 050-667-8419
          </div>
        </div>
      </div>
    <br>
    </div>  
    
    <div id="footer"></div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
  </body>

</html>
