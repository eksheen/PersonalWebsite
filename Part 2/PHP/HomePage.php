<?php include 'header.php'; ?>
<div id="navbar" class="collapse navbar-collapse">
  <ul class="nav navbar-nav">
    <?php listLinks(); ?>
  </ul>
</div><!--/.nav-collapse -->
</div>
</nav>
<div class="col-lg-12">
  <div class="starter-template row text-center">
    <h1><br>Welcome to my homepage</h1>
    <p class="lead">Computer Science and Economics Double Major</p>
  </div>
  <div class="row">
    <div class="container">
    <div class="HomePageIMG col-md-3">
      <img src="../IMG/Xmas.png" alt="Me" align="left" id="homepageMe">
    </div> 
    <div class="body col-md-8">
      <p class="bodyText">Hello, welcome to my homepage. Here is a place where you can learn about me, my interests, see my resume as well have access to my github repositories. 
        If you can't tell I am a computer science and economics double major. Many people think this is an odd combination. However to me it makes a lot of sense.
        I want to pursue a career in the computer science field. I also someday may want to start my own company or become the C-level exec of a tech company. Both 
        of these goals involve knowledge of how money flows and how companies attain cash. It also needs an understanding of the economoics of labor and the business on a macroeconomic scale. 
        That being said I want to start out this path by knowing how a tech company works form the bottom up. This summer I will be an intern at Fedex in Moon PA. I am
        excited to begin programming on a team in a professional setting.
      </p>
    </div>
  </div>
  </div>
</div><!-- /.container -->
<?php include 'footer.php'; ?>
<?php function listLinks() {
  $navbarListItems = array('<li class="active"><a href="#">Home</a></li>',
    '<li><a href="About.php">About</a></li>',
    '<li><a href="Contact.php">Contact</a></li>',
    '<li><a href="Resume.php">Resume</a></li>',
    '<li><a href="https://github.com/eksheen">GitHub</a></li>');
  foreach ($navbarListItems as $value) {
    echo $value;
  }
} ?>