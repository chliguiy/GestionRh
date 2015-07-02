
@extends('app')
@section('content')
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Portfolio of Mitchell Cosh</title>

  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.css">
  <link rel="stylesheet" href="stylesheets/app.css">

  <script src="javascripts/modernizr.foundation.js"></script>
</head>
<body>

  <!-- Header and Nav -->

  <nav class="top-bar">
    <ul>
      <!-- Title Area -->
      <li class="name">
      </li>
      <li class="toggle-topbar"><a href="#"></a></li>
    </ul>
   </nav>

  <header class="row">
    <div class="twelve columns">
        <h1>
            PORTFOLIO OF MITCHELL COSH
        </h1>
        <h4>
            2D & 3D ARTIST | DESIGNER | INDIE GAME DEVELOPER
        </h4>
        
        <p><a href="#">Contact Me</a> | <a href="http://thelightupwarrior.co.uk/">Portfolio</a> | <a href="http://thelightupwarrior.co.uk/games">Light-Up Warrior Games</a></p>
      <hr />
    </div>
  </header>

  <!-- End Header and Nav -->
  <!-- Main Grid Section -->

<div class="twelve columns">
    <div class="row">        
        
<h3>Art Skills</h3>
<span class="radius label">Adobe Photoshop</span> <span class="radius label">Autodesk 3ds Max</span> <span class="radius label">Autodesk Mudbox</span> <span class="radius label">Pixologic zBrush</span> <span class="radius label">Traditional</span>

<h3>Code Skills</h3>
<span class="radius label">Limited AS3/Flash</span> <span class="radius label">Limited C++</span> <span class="radius label">Construct 2 Visual Scripting</span>

<h3>Game Engine Experience</h3>
<span class="radius label">Source Engine</span> <span class="radius label">UDK (UE3)</span> <span class="radius label">Unity</span> <span class="radius label">Stencylworks (Flash)</span> <span class="radius label">Construct 2 (HTML5)</span>
          
<h3>Education Information</h3>
<div class="row">
    <div class="seven columns">
        <u>Secondary</u><br />
        Regent House Grammar School - 9 GCSEs incl. Maths & English<br />
        <br />
        <u>Degree</u><br />
        Northumbria University - BSc Hons. Computer Games Design & Production - 2:1<br />
        <br />
    </div>
</div>

<div class="row">
    <div class="three columns">
        <a class="small button" "radius button" href="http://thelightupwarrior.co.uk/CV.pdf">Download CV</a><br />
        Requires Adobe Reader.
    </div
</div>

  <!-- End Grid Section -->
  <!-- Footer -->

  <footer class="row">
    <div class="twelve columns">
      <hr />
      <div class="row">
        <div class="six columns">
          <p>&copy; Copyright Mitchell Cosh 2010 - 2012</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.event.move.js"></script>
  
  <script src="javascripts/jquery.event.swipe.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="javascripts/jquery.foundation.magellan.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>
</body>
</html>
@endsection 