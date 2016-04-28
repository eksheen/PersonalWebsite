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
    <h1 id ="postSubmit"> Thank you for submitting your information!</h2>
      <h2 id="preSubmit"><br>Welcome to the contact page</h1>
      </div>
      <div class="body text-center">
        <p class = "lead">Please submit your name, email and what it is you would like to contact me about.</p>
        <form action="ContactForm.php" method="post" class="form" id="contactForm">
          <input type="text" name="name" id="nameForm" placeholder="Name"/><br>
          <input type="text" name="email" id="emailForm" placeholder="Email"/><br>
          <textarea name="inquiry" id="inquiryForm" rows="10" cols="50" placeholder="Inquiry"></textarea><br>
          <input type="submit" id="formSubmit">
        </form>
        <!-- Add character counter -->
      </div>
    </div><!-- /.container -->
    <?php include 'footer.php'; ?>
    <?php function listLinks() {
      $navbarListItems = array(' <li><a href="HomePage.php">Home</a></li>',
        '<li><a href="About.php">About</a></li>',
        '<li class="active"><a href="#">Contact</a></li>',
        '<li><a href="Resume.php">Resume</a></li>',
        '<li><a href="https://github.com/eksheen">GitHub</a></li>');
      foreach ($navbarListItems as $value) {
        echo $value;
      }
    } ?>
