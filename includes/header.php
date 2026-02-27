<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JIGYANSA</title>
  <link rel="stylesheet" href="/css/header.css" />
</head>
<body>
  <nav class="navbar">
    <div class="logo-section" onclick="goHome()">
      <img src="/images/logo.png" alt="Club Logo" class="logo-img" />
      <span class="logo-text">JIGYANSA</span>
    </div>
    <ul class="nav-links">
      <li class="dropdown">
        <a href="../index.php">Home</a>
        <ul class="dropdown-menu">
          <li><a href="/home/aboutus.php">About Us</a></li>
          <li><a href="/home/clubhistory.php">Club History</a></li>
          <li><a href="https://sac.iiserbpr.ac.in/clubs/outreach/jigyansha.php">SAC PAGE</a></li>
          
          
        </ul>
      </li>
      <li class="dropdown">
        <a href="/home/team.php">Team</a>
        <ul class="dropdown-menu">
          <li><a href="/home/team.php">Current Members</a></li>
          <li><a href="/home/founding.php">Founding Members</a></li>
          <li><a href="/home/former.php">Former Members</a></li>
          
        </ul>
      </li>
      <li class="dropdown">
        <a href="/events/gallery.php">Gallery</a>
        <!-- <ul class="dropdown-menu"> -->
          <!--<li><a href="#">Flashbacks</a></li>CONNECT WITH THE PHP FILE INSIDE EVENTS FOLDER-->
          <!-- <li><a href="/events/whatsnext.php">What's next?</a></li>CONNECT WITH THE PHP FILE INSIDE EVENTS FOLDER -->
          <!-- <li><a href="/events/gallery.php">Gallery</a></li>CONNECT WITH THE PHP FILE INSIDE EVENTS FOLDER -->
        <!-- </ul> -->
      </li>
      <li class="dropdown">
        <a href="#">Release</a><!--CONNECT WITH THE PHP FILE RELEASE.PHP-->
        <ul class="dropdown-menu">
          <li><a href="/contents/podcasts.php">Srot</a></li>
          <li><a href="/contents/articles.php">Articles</a></li>
          <li><a href="/contents/vodcasts.php">Echoes</a></li>
        </ul>
      </li>
      <li><a href="/contact.php">Contact Us</a></li>
    </ul>
    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
  </nav>

  <script src="/js/script.js"></script>
</body>
</html>
