<?php include 'header.php'; ?>
<div id="navbar" class="collapse navbar-collapse">
  <ul class="nav navbar-nav">
    <?php listLinks(); ?>
  </ul>
</div><!--/.nav-collapse -->
</div>
</nav>
<div class="container">
  <div class="starter-template row text-center">
    <h1><br>Resume/CV</h1>
    <p class="lead">
      If you are looking for my resume you can find it <a href="../PDF/MyResume.pdf">here</a>.<br>
      I have a published Economic opinion piece, which you can read <a href="http://www.panoramas.pitt.edu/content/argentinas-presidential-election-which-economic-policy-will-win"> here</a>.<br>
      If you are looking for a link to my github you can click the tab in the nav-bar or you can click <a href="https://github.com/eksheen">here</a>.
    </p>
  </div>
  <div class="body">
  </div>
</div><!-- /.container -->
<?php include 'footer.php'; ?>
<?php function listLinks() {
  $navbarListItems = array(' <li><a href="HomePage.php">Home</a></li>',
    '<li><a href="About.php">About</a></li>',
    '<li><a href="Contact.php">Contact</a></li>',
    '<li class="active"><a href="#">Resume</a></li>',
    '<li><a href="https://github.com/eksheen">GitHub</a></li>');
  foreach ($navbarListItems as $value) {
    echo $value;
  }
} ?>
