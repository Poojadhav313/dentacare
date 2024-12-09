<?php include('header.html') ?>

<head>  
  <title>Dentacare - Contact</title>
  <link rel="stylesheet" href="contact.css">
</head>


<body>

  <section id="banner-section">
    <p class="banner-p">Contact us</p>
    <h1>Reach Out To Us</h1>
    <p>Lorem ipsum dolor sit amet consectetur Condimentum pellentesqe enim felis blandit ornare cursu quisque.</p>
  </section>

  <section id="form-section">
    <h1 class="reveal">Contact Us</h1>
    <form method="POST"  class="reveal"> 
      <div class="form-dub">
        <div class="form-item reveal">
          <label>First Name</label>
          <input type="text" name="fname" required>
        </div>

        <div class="form-item reveal">
          <label>Last Name</label>
          <input type="text" name="lname" required>
        </div>
      </div>

      <br>

      <div class="form-dub">
        <div class="form-item">
          <label>Email address</label>
          <input type="email" name="email" required>
        </div>

        <br>

        <div class="form-item">
          <label>Phone no</label>
          <input type="text" name="phone" pattern="[0-9]{10}" maxlength="10" required>
        </div>
      </div>

      <br>

      <div class="form-item">
        <label>Message</label><br>
        <textarea name="msg"></textarea>
      </div>

      <br>

      <div class="form-checkbtn">
        <input type="checkbox" required>I agree to the <span>Terms and conditions</span>
      </div>

      <submit></submit>
      <input type="Submit" value="Send Message">
      
    </form>


    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $msg = $_POST["msg"];

      $to = "greenpantry123@gmail.com";
      $sub = "message from ".$fname." ".$lname;
      
      $header = "Contact us form response";

      $send = mail($to, $sub, $msg, $header);

      echo($send ? "": error_get_last());

    }
      
    ?>

  </section>

  <section id="middle-section" class="reveal">
    <h1 >Stay Connected with Our Contact Information</h1>

    <div class="boxes">
      <div class="box">
        <img src="https://cdn.prod.website-files.com/66bedab1ce846a42bbf0956a/66fbe960eda3e825ab6d1789_Contact%20Locator%20Icon.svg" alt="">
        <span class="circle"></span>

        <h3>Info@Example.com</h3>
        <p>Have a project in mind? Send a message.</p>
      </div>

      <div class="box">
        <img src="https://cdn.prod.website-files.com/66bedab1ce846a42bbf0956a/66fbe960eda3e825ab6d1789_Contact%20Locator%20Icon.svg" alt="">
        <span class="circle"></span>

        <h3>(888) 456 7890</h3>
        <p>We’re interested in working together!</p>
      </div>

      <div class="box">
        <img src="https://cdn.prod.website-files.com/66bedab1ce846a42bbf0956a/66fbe960eda3e825ab6d1789_Contact%20Locator%20Icon.svg" alt="" style="margin-top: 25px;">
        <span class="circle"></span>

        <h3>410 Sandtown, California 94001, USA</h3>
        <p>Would you like to join our growing team?</p>
      </div>


    </div>
  </section>

<?php include('footer.html'); ?>