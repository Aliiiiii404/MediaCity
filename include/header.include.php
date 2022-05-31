<header>
  <nav id="nav-ordi">
      <a href="index.php"><img class="mediacity" src="img-site-groupe/mediacity.png" alt=""></a>
      <ul>
        <li><a href="index.php">ACCUEIL</a></li>
        <li><a href="films.php">FILMS</a></li>
        <li><a href="serie.php">SERIES</a></li>
        <li><a href="musique.php">MUSIQUES</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li id="search" onclick="searchBarBlock()"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
        <?php echo panier(); ?>
        <li><a href="connexion-user.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
      </ul>
      <div class="space">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
  </nav>
  <nav class="nav-mobile">
    <img class="small-logo" src="img-site-groupe/mediacity.png" alt="">
    <button id="nav-mobile-btn">
      <div class="berger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </button>
      <div id="nav-mobile-div" class="not-show">
          <a class="nav--transition" href="index.php">accueil</a>
          <a class="nav--transition" href="films.php">films</a>
          <a class="nav--transition" href="serie.php">Series</a>
          <a class="nav--transition" href="musique.php">musiques</a>
          <a class="nav--transition" href="contact.php">CONTACT</a>
          <a class="nav--transition"href="#" id="search"  onclick="searchBarBlock()"><i class="fa fa-search" aria-hidden="true"></i></a>
          <?php echo panierSummary(); ?>
          <a class="nav--transition" href="connexion-user.php"><i class="fa fa-user" aria-hidden="true"></i></a>
      </div>
  </nav>
</header>