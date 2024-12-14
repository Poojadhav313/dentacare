<?php include('header.html') ?>

<head>  
  <title>Dentacare - About</title>
  <link rel="stylesheet" href="about.css">
</head>


<body>

  <section id="banner-section">
    <p class="banner-p">About us</p>
    <h1>About Dentacare</h1>
    <p>Lorem ipsum dolor sit amet consectetur. Condimentum pellentesque enim felis blandit ornare cursus quisque. Sagittis at a eget suscipit mattis nulla egestas porttitor massa.</p>  
  </section>

  <section id="marquee-section">
    <div class="marquee-content">
      <p>Your Smile, Our Priority</p>
    </div>
    <div class="marquee-content">
      <p>Your Smile, Our Priority</p>
    </div>
  </section>

  <section id="hover-section">
    <section id="section-title">
      <p>Benefits of our salon</p>
    </section>

    <a href="service.php">
    <div id="section1">
        <div class="hover-section">
          <h1>Smile makeovers</h1>
        </div>
        <div class="img">
          <img src="" alt="">          
          <!-- <img src="https://cdn.prod.website-files.com/66ff6ff93d2a162b38251e51/671f311872eb865b8589dc5a_Blog%20Six%20Pg.jpg" alt=""> -->
        </div>
        <div class="arrow">
        &#8594;
        </div>
    </div>
    </a>

    <a href="service.php">
    <div id="section2">
        <div class="hover-section">
          <h1>Wisdom Teeth Removal</h1>
        </div>
        <div class="img">
          <img src="" alt="">
      </div>
      <div class="arrow">
      &#8594;
        </div>
    </div>
    </a>

    <a href="service.php">
    <div id="section3">
        <div class="hover-section">
          <h1>Crowns and Bridges</h1>
        </div>
        <div class="img">
          <img src="" alt="">
      </div>
      <div class="arrow">
      &#8594;
        </div>
    </div>
    </a>

    <a href="service.php">
    <div id="section4">
        <div class="hover-section">
          <h1>Digital X-Rays</h1>
        </div>
        <div class="img">
          <img src="" alt="">
      </div>
      <div class="arrow">
      &#8594;
      </div>
    </div> 
    </a>

    <a href="service.php">
    <div id="section5">
        <div class="hover-section">
          <h1>Gum Health Evaluation</h1>
        </div>
        <div class="img">
          <img src="" alt="">
      </div>
      <div class="arrow">
      &#8594;
      </div>
    </div>   
    </a>

  </section>

  <section id="experience-section">
    <div id="experience-left">
      <h2>Stay Ahead of Dental Issues with Routine Checkups</h2>
      <img src="https://cdn.prod.website-files.com/66bedab1ce846a42bbf0956a/66fa3a4f9274be0e6e0b3cda_About%20Experience%20Left.avif" alt="">
    </div>

    <div id="experience-right">
      <img src="https://cdn.prod.website-files.com/66bedab1ce846a42bbf0956a/66fa3a4e083adfa7f84b5112_About%20Experience%20Right.avif" alt="">
      <h2>unique experience</h2>
      <p>Lorem ipsum dolor sit amet consectetur. Quisque consectetur et integer nibh nulla massa imperdiet Urna tortor urna feugiat quisque platea.</p>
      <div id="lists">
        <ul>
          <li>Cancer Screening</li>
          <li>Oral Hygiene</li>
          <li>Dental Cleaning</li>
          <li>Cavity Detection</li>
          <li>Digital X-Rays</li>
        </ul>
        <ul>
          <li>Cancer Screening</li>
          <li>Oral Hygiene</li>
          <li>Dental Cleaning</li>
          <li>Cavity Detection</li>
          <li>Digital X-Rays</li>
        </ul>
        <ul>
          <li>Cancer Screening</li>
          <li>Oral Hygiene</li>
          <li>Dental Cleaning</li>
          <li>Cavity Detection</li>
          <li>Digital X-Rays</li>
        </ul>
      </div>
    </div>
  </section>

  <section id="video-section">
    <video id = "vid" src="https://videocdn.cdnpk.net/videos/4df30409-3af4-4d02-99de-ccadb4774512/horizontal/previews/watermarked/large.mp4" autoplay loop></video>
    <div id="vid-btn-container">    
      <button id="video-btn">||</button>    
    </div>
    <h3>Book Your Appointment Online for Convenient Dental Care</h3>
    <div id="vid-hr"></div>
  </section>

  <section id="about-testimonial-section">
    <div id="about-testimonial-top">
      <img src="https://img.freepik.com/free-photo/dentists-holding-dental-tools_107420-65564.jpg?t=st=1734162563~exp=1734166163~hmac=8dbb065595dd4032f7958fbd7604ae9db6d372ce282d79c3d658b46a8e153444&w=360" alt="">
    </div>

    <div id="about-testimonial-bottom">
      <div class="about-testimonial-arrows">
        <button id="prev-btn"> PREV </button>
      </div>

      <div id="slider-container">
        <div class="about-testimonial-box current-slide">
          <div class="about-testimonial-data">
            <h1>Hassel Free Services</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit nemo praesentium ut omnis! Enim, asperiores quasi eius amet nemo quia unde repudiandae dolor eaque voluptatem.</p>
            <h1>Kristie Erbe</h1>
            <p class="post">Orthodontist</p>
          </div>
        </div>

        <div class="about-testimonial-box">
          <div class="about-testimonial-data">
          <h1>Fantastic</h1>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit nemo praesentium ut omnis! Enim, asperiores quasi eius amet nemo quia unde repudiandae dolor eaque voluptatem.</p>
          <h1>Sonia Miller</h1>
          <p class="post">Surgery expert</p>
          </div>
        </div>

      </div>

      <div class="about-testimonial-arrows">
        <button id="next-btn"> NEXT </button>
      </div>

    </div>
  </section>


<script src="video.js"></script>
<script src="testimonial.js"></script>

<?php include('footer.html'); ?>