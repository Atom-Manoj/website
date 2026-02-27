<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jigyansa || IISER BPR</title>
  <link rel="stylesheet" href="/css/index.css" />
  <link rel="icon" href="/images/logo.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>
<body>
  <?php include 'includes/header.php'; ?>
  <section class="jgy-welcome-section">

  <!-- Hero Area -->
  <div class="jgy-hero">
    <div class="jgy-hero-content">
      <h1>Welcome to Jigyansa</h1>
      <p>
        No end to curiosity<br>
        ଜିଜ୍ଞାସା ରୁ ଜ୍ଞାନ ପର୍ଯ୍ୟନ୍ତ – ଏକ ପ୍ରୟୋଗ ଦ୍ୱାରା।
      </p>
      <a href="/home/aboutus.php" class="jgy-btn-yellow">More about us</a>
    </div>

    <div class="jgy-hero-video">
      <video autoplay muted loop playsinline>
        <source src="../images/website video.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
    </div>
  </div>

  <!-- Sponsors Slider (Wrapped properly inside section now) -->
  <div class="jgy-sponsor-wrapper">
    <div class="sponsor-overlay">

      <div class="sponsor-slider-section">
        <div class="sponsor-slider-track">
          <img src="../images/home-carousel/1.jpg" alt="Snap 1" />
          <img src="../images/home-carousel/2 (1).png" alt=" Snap 3" />
          <img src="../images/home-carousel/2 (2).png" alt=" Snap 4" />
          <img src="../images/home-carousel/3 (1).png" alt=" Snap 5" />
          <img src="../images/home-carousel/4 (1).png" alt=" Snap 6" />
          <img src="../images/home-carousel/4 (2).png" alt=" Snap 7" />
          <img src="../images/home-carousel/5 (1).png" alt=" Snap 8" />
          <img src="../images/home-carousel/6 (1).png" alt=" Snap 9" /> 
          <img src="../images/home-carousel/7 (1).jpg" alt=" Snap 2" />
          <!-- Repeat for smooth scroll -->
        </div>
      </div>
    </div>
  </div>

</section>


  
  
  <section class="who-we-are-main">
  <div class="who-left-count">
    <h2>Members</h2>
    <p class="who-count" data-count="60">0</p>
    <p>Active Members</p>
  </div>

  <div class="who-middle-description">
    <h2 class="who-heading">Who We Are:</h2>
    <div class="who-underline"></div>
    <p>
      <strong>Jigyansa</strong> (from <em>jigyasa</em>, meaning “curiosity”) is the official Science Outreach Club of IISER dedicated to democratizing science. We bridge the gap between complex scientific knowledge and the everyday world.
    </p>
    <p>
      Jigyansa isn’t just a club — it’s a science revolution in local dialect. Born at IISER Berhampur, this grassroots initiative turns the wonder of scientific discovery into stories that speak the language of the people — literally.

      From street plays in rural Odisha to podcasts and sci-art in Odia and English, Jigyansa breaks the lab walls to bring science to every doorstep. It’s where curiosity meets culture, and where students become storytellers of science. If you’ve ever wondered what science looks like when it walks, talks, and inspires outside the classroom — Jigyansa is your answer.
    </p>
  </div>

  <div class="who-logo-box">
    <img src="/images/logo.png" alt="Jigyansa Logo" />
  </div>

  
</section>

<!-- Original News and Stories Section - Commented Out
<section class="jgy-news-section">
  <h2 class="jgy-news-heading">News and Stories</h2>
  <div class="jgy-news-vertical-slider">
    <div class="jgy-news-container">
      <div class="jgy-news-track">
        <div class="news-item">
          <img src="https://i.imgur.com/HD2qY1y.jpg" alt="Outreach" />
          <div class="news-content">
            <h2>Jigyansa Outreach</h2>
            <p>Expanding science through outreach programs and collaboration.</p>
            <a href="#" class="jgy-btn-yellow">Learn More</a>
          </div>
        </div>
        <div class="news-item">
          <img src="https://i.imgur.com/f8A3VWT.jpg" alt="Tech Sphere" />
          <div class="news-content">
            <h2>AI + Robotics</h2>
            <p>Innovating with intelligent machines for the future world.</p>
            <a href="#" class="jgy-btn-yellow">Explore</a>
          </div>
        </div>
        <div class="news-item">
          <img src="https://i.imgur.com/JmBxt7Z.jpg" alt="Robotics Image" />
          <div class="news-content">
            <h2>Future Tech</h2>
            <p>Bringing cutting-edge science to students and society.</p>
            <a href="#" class="jgy-btn-yellow">See More</a>
          </div>
        </div>
        <div class="news-item">
          <img src="https://i.imgur.com/HD2qY1y.jpg" alt="Outreach" />
          <div class="news-content">
            <h2>Jigyansa Outreach</h2>
            <p>Expanding science through outreach programs and collaboration.</p>
            <a href="#" class="jgy-btn-yellow">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
-->

<!-- Recruitment Flyer Section -->
<section class="jgy-news-section" style="padding: 20px;">
  <h2 class="jgy-news-heading">Join Our Team</h2>
  
  <div class="recruitment-container">
    <div class="recruitment-card">
      <img src="/images/logo.png" alt="Jigyansa Recruitment" />
      <div class="news-content">
        <h2> Jigyansa Recruitment 2024-25</h2>
        <p>Join IISER Berhampur's official Science Outreach Club and be part of something extraordinary!</p>
        
        
        <p class="contact-info">Questions? <a href="mailto:jigyansa@iiserbpr.ac.in">jigyansa@iiserbpr.ac.in</a></p>
      </div>
    </div>
  </div>
</section>
  </div>
</section>

  <section class="instagram-feed">
  <p class="text-blk team-head-text">
    Instagram Snaps
  </p>
    <div class="insta-grid">
      <img src="/images/home1.jpg" alt="">
      <img src="/images/home2.jpg" alt="">
      <img src="/images/home3.jpg" alt="">
      <img src="/images/home4.jpg" alt="">
    </div>
  </section>
  <section id="team-section-wrapper">
  <section class="team-section">
    <h1>Meet our Club Convenors</h1>

    <div class="team-role">
      <h2>Faculty Advisor</h2>
      <div class="team-grid">
      <div class="team-member faculty-card" data-aos="fade-up" data-aos-duration="1000">
        <img src="/images/Tushar-Chakraborti.png" alt="Dr. Tushar Mouli Chakraborti" class="team-photo" />
        <div class="team-info">
          <h3 class="name">Dr. Tushar Mouli Chakraborti</h3>
          <p class="position">Faculty Advisor</p>
        </div>
        <div class="team-hover-info">
          <p class="description"></p>
          <p class="batch">Prof. Department of Earth and Environmental Sciences</p>
          <div class="social-icons">
            <a href="mailto:tusharmc@iiserbpr.ac.in" aria-label="Email" class="social-link email-link">
              <i class="fas fa-envelope"></i>
            </a>
            <a href="https://scholar.google.com/citations?user=2cDSW7YAAAAJ&hl=en" target="_blank" aria-label="Google Scholar" class="social-link scholar-link">
              <i class="fas fa-graduation-cap"></i>
            </a>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="team-role">
  <h2>Coordinators</h2>
  <div class="team-grid">
    
    <!-- Prerana Sahoo -->
    <div class="team-member">
      <img src="/images/team/Prerna.jpg" alt="Prerana Sahoo" class="team-photo" />
      <div class="team-info">
        <h3 class="name">Prerana Sahoo</h3>
        <p class="position">Coordinator</p>
      </div>
      <div class="team-hover-info">
        <p class="description">Where ideas vibe, and science comes alive</p>
        <p class="batch">Batch: 2023</p>
        <div class="social-icons">
          <a href="mailto:prerana23@iiserbpr.ac.in" target="_blank" aria-label="Email" class="social-link">
            <i class="fas fa-envelope"></i>
          </a>
          <a href="https://www.instagram.com/_.prernnaa_?utm_source=ig_web_button_share_sheet&igsh=ZzA4djExaTFmNWFx" target="_blank" aria-label="Instagram" class="social-link">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Swati S. Mishra -->
    <div class="team-member">
      <img src="/images/team/swati.jpg" alt="Swati S. Mishra" class="team-photo" />
      <div class="team-info">
        <h3 class="name">Swati S. Mishra</h3>
        <p class="position">Co-Coordinator</p>
      </div>
      <div class="team-hover-info">
        <p class="description">Chasing my curiosity with knowledge as my wings</p>
        <p class="batch">Batch: 2023</p>
        <div class="social-icons">
          <a href="mailto:swati23@iiserbpr.ac.in" target="_blank" aria-label="Email" class="social-link">
            <i class="fas fa-envelope"></i>
          </a>
          <a href="https://www.instagram.com/m.swati16?utm_source=ig_web_button_share_sheet&igsh=MWlvMmlhc2gxc3Y5Ng==" target="_blank" aria-label="Instagram" class="social-link">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Sruti Srujanika -->
    <div class="team-member">
      <img src="/images/team/Sruti Srujanika_.jpg" alt="Sruti Srujanika" class="team-photo" />
      <div class="team-info">
        <h3 class="name">Sruti Srujanika</h3>
        <p class="position">Co-Coordinator</p>
      </div>
      <div class="team-hover-info">
        <p class="description">I run the socials where science meets aesthetics, and curiosity goes viral</p>
        <p class="batch">Batch: 2023</p>
        <div class="social-icons">
          <a href="mailto:sruti23@iiserbpr.ac.in" target="_blank" aria-label="Email" class="social-link">
            <i class="fas fa-envelope"></i>
          </a>
          <a href="https://www.instagram.com/_.srutzz?utm_source=ig_web_button_share_sheet&igsh=MXJnaWlkdjM1Y2xiYw==" target="_blank" aria-label="Instagram" class="social-link">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>

  </div>
</div>


  </div>
</div>

  </section>
</section>

  <?php include 'includes/footer.php'; ?>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="/js/index.js"></script>
</body>
</html>