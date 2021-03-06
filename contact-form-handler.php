<?php

$myemail = 'admin@liamcondon.com';//<-----Put Your email address here.

    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

	$to = $myemail;
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Subject: $subject \n Message \n $message";

	$headers = "From: $myemail\n";
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169951831-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-169951831-1');
  </script>

  <meta charset="utf-8">
  <meta name="description" content="Portfolio of Liam Condon, Front End Web Developer for web and mobile interfaces in Dublin">
  <meta name="keywords" content="Contact Liam Condon, front end web developer">
  <meta name="author" content="Liam Condon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact form handler | Liam Condon Portfolio</title>
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="scripts/scripts.js"></script>
  <script defer src="https://friconix.com/cdn/friconix.js"></script>
</head>

<body>

  <div class="container">

    <header>
      <a href="#" id="menu-icon">&#8801;</a>
      <a href="index.html">
        <div id="logo">
          <h2 class="logo-name">LIAM CONDON</h2>
        </div>
      </a>

      <div id="mylinks">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
     </div>

     <nav class="top-nav">
       <ul>
         <li><a href="index.html">Home</a></li>
         <li><a href="about.html">About</a></li>
         <li><a href="portfolio.html">Portfolio</a></li>
         <li><a href="blog.html">Blog</a></li>
         <li><a href="contact.html" class="current">Contact</a></li>
       </ul>
     </nav>
   </header>

   <main>
     <section class= "section-two dark">
       <!-- This page is displayed only if there is some error -->
    <div>
        
        <h3 style="color: #f0f0f0">
        <?php
        echo nl2br($errors);
        ?>
        </h3>
        
    </div>
     </section>
  </main>

 <!-- bottom banner image goes here -->
   <div class="bottom-strip">
        <ul>
          <li><a class="grow" href="https://github.com/liamcondon"><img src="images/github-icon.png" alt=""/></a></li>
          <li><a class="grow" href="https://www.linkedin.com/in/liamfcondon/"><img src="images/linkedin-icon.svg" height="32" width="32" alt=""/></a></li>
          <li><a class="grow" href="mailto:liamfcondon@gmail.com"><img src="images/email-icon.svg" height="32" width="32" alt="email icon"/></a></li>
        </ul>
    </div>

    <footer>
    
        <p class="copyri">&copy; 2020 Liam Condon</p>
        
        <nav id="bottom-nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="https://www.liamcondon.com/blog">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
      
        <button id="backToTop"><i class="fi-xnsuxl-chevron-solid fi-4x"></i></button>
    
    </footer>

 
  </div>

</body>
</html>

