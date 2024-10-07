<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">


  
  <title>Frontend Mentor | Loopstudios landing page</title>

  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  <style>
    .main-grid{
      display: grid;
      grid-template-columns: auto ;
    }
    .top{
      position: relative;
      width: 100vw;
      height: 90vh;
    }
    .image-hero{
      width: 100vw;
      height: 90vh;
      position: absolute;
    }

    html, body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    }
    .hero-section{
      width: 100vw;
      height: 90vh;
      background-color: black;
      opacity: 50%;
      color: white;
      position: absolute;
    }
    .top-bar{
      display:flex;
      justify-content: space-between;
      color:white;
      position: absolute;
      width: 100vw;
      padding-top:4em;
      
      
    }
    .logo-name{
      width: 40vw;
      font-family: "Alata", sans-serif;
      font-weight: 400;
      font-style: normal;
      font-size: larger;
      padding-left: 9em;
    }
    .pages-names{
      display: flex;
      justify-content:space-between;
      font-family: "Alata", sans-serif;
      font-weight: 500;
      font-style: normal;
      width: 30vw;
      padding-right: 8em;
    }
  </style>
</head>
<body>
<div class="main-grid">
<div class="top">
  
<img class="image-hero" src="https://i.postimg.cc/L8KXCc4L/image-hero.jpg" alt="Description of the hero image">
<div class="hero-section">
</div>

<div class="top-bar">
    <div class="logo-name">
      Loopstudios
    </div>
    <div class="pages-names">
      <span>About</span>
      <span>Careers</span>
      <span>Events</span>
      <span>Products</span>
      <span>Support</span>
    </div>
  </div>
</div>
<div class="middle"></div>
<div class="bottom"></div>

</div>

</body>

  Immersive experiences that deliver

  The leader in interactive VR

  Founded in 2011, Loopstudios has been producing world-class virtual reality 
  projects for some of the best companies around the globe. Our award-winning 
  creations have transformed businesses through digital experiences that bind 
  to their brand.

  Our creations

  See all

  Deep earth
  Night arcade
  Soccer team VR
  The grid
  From up above VR
  Pocket borealis
  The curiosity
  Make it fisheye

  About
  Careers
  Events
  Products
  Support

  © 2021 Loopstudios. All rights reserved.
  <?php echo realpath('../css/app.css'); ?>
</body>
</html>
