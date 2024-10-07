<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
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
    .visible{
      position: absolute;
      height: 100%;
    }
    .top-bar{
      display:flex;
      justify-content: space-between;
      color:white;
      width: 100vw;
      padding-top:4em;
      height: 25%;
      
    }
    .logo-name{
      width: 40vw;
      font-family: "Alata", sans-serif;
      font-weight: 400;
      font-family: "Josefin Sans", sans-serif;
  font-optical-sizing: auto;
      font-size: 23pt;
      padding-left: 10%;
    }
    .pages-names{
      display: flex;
      justify-content:space-between;
      font-family: "Alata", sans-serif;
      font-weight: 500;
      font-style: normal;
      width: 30vw;
      padding-right: 10%;
    }
    .hero-text{
      color:white;
      margin-left: 10%;
      padding:0.5em;
      font-family: "Quicksand", sans-serif;
      font-size: 40pt;
      width: 40vw;
      border: 3px solid white;
      
    }
    .middle{
      height: 70vh;
      margin: 10%;
      position: relative;
    }
    .mid-img{
      position: absolute;
      width: 50vw;
    }
    .mid-text{
      position: absolute;
      width: 30vw;
      height:60%;
      background-color: white;
      font-family: "Quicksand", sans-serif;
      font-size: 10pt;
      margin-top: 15%;
      margin-left: 50%;
      padding: 5em;
    }
    .header{
      font-family: "Quicksand", sans-serif;
      font-size: 40pt;
      text-transform: uppercase;
    }
    .bottom{
      margin-left: 10%;
      margin-right: 10%;
    }
    .bottom-text{
      margin-bottom: 5%;
      font-size: 40pt;
      text-transform: uppercase;
    }
    .bottom-grid-cont{
      display: grid;
      grid-template-columns: auto auto auto auto;
      gap: 30px;
      margin-bottom: 5%;
    }
    .elements>.text{
      
      font-family: "Quicksand", sans-serif;
      font-size: 20pt;
    }
    .bottom-bar{
      width: 100vw;
      height: 5vh;
      background-color: black;
    bottom: 0;
    margin:0;
    }
  </style>
</head>
<body>
<div class="main-grid">
<div class="top">

<img class="image-hero" src="http://localhost:8000/images/image-hero.jpg" alt="Description of the hero image">
<div class="hero-section">
</div>
<div class="visible">
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

<div class="hero-text">

IMMERSIVE<br>
EXPERIENCES<br>
THAT DELIVER
  
</div></div>
</div>


<div class="middle">

  <div class="mid-img">
    <img src="http://localhost:8000/images/image-interactive.jpg" alt="">
  </div>
  <div class="mid-text">
    <div class="header">The leader in interactive VR</div>

    Founded in 2011, Loopstudios has been producing world-class virtual reality 
    projects for some of the best companies around the globe. Our award-winning 
    creations have transformed businesses through digital experiences that bind 
    to their brand.
  </div>


</div>
<div class="bottom">
<div class="bottom-text">Our creations</div>
<div class="bottom-grid-cont">
<div class="elements">  <img src="http://localhost:8000/images/image-deep-earth.jpg" alt="Deep earth">
<div class="text">Deep earth</div>
</div>
<div class="elements">  <img src="http://localhost:8000/images/image-night-arcade.jpg" alt="Night arcade">
<div class="text">Night arcade</div>
</div>
<div class="elements">  <img src="http://localhost:8000/images/image-soccer-team.jpg" alt="Soccer team VR">
<div class="text">Soccer team VR</div>
</div>
<div class="elements">  <img src="http://localhost:8000/images/image-grid.jpg" alt="The grid">
<div class="text">The grid</div>
</div>
<div class="elements">  <img src="http://localhost:8000/images/image-from-above.jpg" alt="From up above VR">
<div class="text">From up above VR</div>
</div>
<div class="elements">  <img src="http://localhost:8000/images/image-pocket-borealis.jpg" alt="Pocket borealis">
<div class="text">Pocket borealis</div>
</div>
<div class="elements">  <img src="http://localhost:8000/images/image-curiosity.jpg" alt="The curiosity">
<div class="text">The curiosity</div>
</div>
<div class="elements">  <img src="http://localhost:8000/images/image-fisheye.jpg" alt="Make it fisheye">
<div class="text">Make it fisheye</div>
</div>
</div>




</div>
<div class="bottom-bar"></div>
</div>

</body>
</body>
</html>
