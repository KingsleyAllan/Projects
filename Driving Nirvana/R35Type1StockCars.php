<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="Homepage/DN Logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driving Nirvana | Stock Cars | LB-WORKS Nissan GT-R R35 Type 1</title>

    <style>
    
        * {box-sizing:border-box}
    
        /* Slideshow container */
        .slideshow-container {
            max-width: 90%;
            position: relative;
            margin: auto;
        }
    
        /* Hide the images by default */
        .mySlides {
            display: none;
        }
    
        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }
    
        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
    
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: none;
        }
    
        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 10px;
            width: 10px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
    
        .active, .dot:hover {
            background-color: black;
        }
    
        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }
    
        table,td{
            border: 1px white;
            border-collapse: collapse;
            width: 90%;
        }
    
        td{
            padding: 10px;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;
            font-size: xx-large;
        }

        .centre{
            margin-left: auto;
            margin-right: auto;
        }
    
        p{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: medium;
            text-align: center;
        }
    
        h4{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding-left: 5%;
            padding-top: 30px;
        }
    
        ul{
            padding-left: 5%;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
    
        ul li{
            padding: 5px;
        }

        .contact{
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .contact h1{
            font-size: 40px;
        }

        .heading2{
            text-align: center;
            font-size:40px;
            padding-top: 20px;
        }

    </style>
</head>

<body>

    <?php require 'Nav.php';?>

    <!-- Slideshow container -->
    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <img src="Slide250.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide251.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide252.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide253.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide254.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide255.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide256.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide257.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide258.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide259.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide260.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide261.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide262.jpg" style="width:100%">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
  
    <!-- The dots/circles -->
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
        <span class="dot" onclick="currentSlide(7)"></span>
        <span class="dot" onclick="currentSlide(8)"></span>
        <span class="dot" onclick="currentSlide(9)"></span>
        <span class="dot" onclick="currentSlide(10)"></span>
        <span class="dot" onclick="currentSlide(11)"></span>
        <span class="dot" onclick="currentSlide(12)"></span>
        <span class="dot" onclick="currentSlide(13)"></span>
    </div>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        }
    </script><br><br>
    
    <table class="centre">
        <tr>
            <td rowspan="2"><b>LB-WORKS NISSAN GT-R R35 TYPE 1 </b></td>
            <td>PRICE</td>
        </tr>
        <tr>
            <td><b>$9,024</b></td>
        </tr>
    </table><br>

    <p>GTR35LB-WORKS Complete Vehicle is in stock now. Ver1 body kit + one-tail specification that collides with the image of the old car as it is. The undercarriage is<br>
        equipped with AirRex air suspension. Please enjoy the unique and impactful body that is comparable to that of a supercar, and the resonant sound of the FI exhaust.
    </p>

    <hr style="width:95%"> 
    
    <h4>EXTERIOR / INTERIOR / DETAIL</h4>
    <ul>
        <li>LB-WORKS NISSAN GT-R R35 type 1 Complete body kit </li>
        <li>AirREX air suspension</li>
        <li>LB original wheels</li>
        <li>FI exhaust with variable valve muffler</li>
        <li>Original color nut</li>
        <li>LB original decal </li>
        <li>Valenti LED tail lamp</li>
        <li>Tail 1 tail processing</li>
    </ul>

   <p>Airbag, ABS, Air Conditioning, Power Steering, Power Window, Anti-Theft System, Genuine Navigation System, CD, DVD, External Wheel, Leather Seat,<br>
    Aero, Power Seat, Air Suss Slowdown, Smart Key, With Instructions.</p><br>

    <hr style="width:95%"> 

    <div class="contact">
        <h1>DN HOLDINGS</h1><h3>Customer Service</h3><h1>+254 741-123-363</h1>
    </div>
    
    <?php require 'Footer.php';?>

</body>
</html>