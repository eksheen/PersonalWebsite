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
    <h1><br>Welcome to the about page</h1>
    <p class="lead">Here you can learn about me on a personal level</p>
  </div>
  <div class="body">
    <p class = "bodyText">
      Some of my favorite things include: reading world news, watching Game of Thrones, and binge watching netflix!
      I also enjoy playing video games and drinking fine whiskies. My favorite whiskey is called Whistle Pig, which is
      is a rye whiskey finished in bourbon barrels. It was distilled by the former head distiller from Makers Mark.
      My favorite movie is Shawshank Redemption. Of course my favorite quote from that movie is "get busy livin' or get 
      busy dyin'" said by Alexander DuFrane. To understand my personality from a personality test level I am a believer 
      in the Meyers-Briggs personality test. You can read more about it <a href="http://www.myersbriggs.org/my-mbti-personality-type/mbti-basics/"> here.</a>
      For those who read the link I am an ISTP. I also have a fascination with wallpapers and I have my computer setup 
      to change my wallpaper every minute. Most of them are about game of thrones, landsacapes, motivational quotes, or 
      computer science related. I want to expand my collection into harry potter and more computer science papers.<br><br>
    </p>
  </div>
</div class="container" align="center"><!-- /.container -->
<div class="body">
  <p class = "lead row text-center">Some of my favorite wallpapers!</p>
</div>
<div id="Wallpaper-carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#Wallpaper-carousel" data-slide-to="0" ></li>
    <?php listwallpaperlinks(); ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class='item active'>
      <img src="../IMG/Wallpapers/Wallpaper1.jpg" alt="...">
    </div>
    <?php wallpapers(); ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#Wallpaper-carousel" role="button" data-slide="prev">
    <span class=""></span>
  </a>
  <a class="right carousel-control" href="#Wallpaper-carousel" role="button" data-slide="next">
    <span class=""></span>
  </a>
</div> <!-- Carousel -->
<div id="afterCarousel">
  <br><br>
  <img src="../IMG/MeNGf.jpg" alt="MeAndGF" style="width:400px;height:400px;" align="right" id="aboutIMG"> 
  <p class="bodytext">
    <br><br>I have a lovely girlfriend pictured to the right. Her name is Kailey and she is going to medical school to become a doctor.
    This is a picture of us celebrating her birthday, which is March 6th!
  </p>
</div>
<?php include 'footer.php'; ?>
<?php function listLinks() {
  $navbarListItems = array(' <li><a href="HomePage.php">Home</a></li>',
    '<li class="active"><a href="#">About</a></li>',
    '<li><a href="Contact.php">Contact</a></li>',
    '<li><a href="Resume.php">Resume</a></li>',
    '<li><a href="https://github.com/eksheen">GitHub</a></li>');
  foreach ($navbarListItems as $value) {
    echo $value;
  }
} ?>
<?php function wallpapers() {
  $arrOfNames = [];
  for ($i=0; $i < 10; $i++) { 
    $imgSrc = "../IMG/Wallpapers/";
    $img = "Wallpaper" . $i . ".jpg";
    $finalImgSrc = $imgSrc . $img;  
    $arrOfNames[] =  $finalImgSrc;
  }
  for ($k=2; $k < 10; $k++) { 
    echo "<div class='item'>";
    echo "<img src=" . "'" . $arrOfNames[$k] . "'" . "alt='...'>";
    echo "</div>";
  }
} ?>
<?php function listwallpaperlinks() {
  for ($i=1; $i < 10; $i++) { 
    $wallpaper = "'#Wallpaper-carousel" . "'";
    $endli = "</li>";
    echo "<li data-target=" . $wallpaper . "data-slide-to=" . "'" . $i . "'>" . $endli;
  }
}
?>

