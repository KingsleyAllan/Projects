<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="Homepage/DN Logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driving Nirvana | Pandem Nissan GT-R (R35)</title>

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

        .heading{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: xx-large;
            padding-left: 5%;
        }

        table,th,td{
            border: 1px solid#8a8a8a;
            border-collapse: collapse;
            width: 90%;
        }
        th,td{
            padding: 10px;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;
        }
        .centre{
            margin-left: auto;
            margin-right: auto;
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

        .heading2 a{
            text-decoration: none;
            color: black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

    </style>
</head>
<body>

    <?php require 'Nav.php';?>

    <!-- Slideshow container -->
    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <img src="Slide171.png" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide172.png" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide173.png" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide174.png" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide175.png" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide176.png" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide177.png" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide178.png" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide179.png" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide180.png" style="width:100%">
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
    </script>
    
    <h1 class="heading">PANDEM NISSAN GT-R (R35)</h1>
    <br>

    <table class="centre">
        <tr>
            <th>Pandem - Rocket Bunny Nissan GT-R (R35) Complete Aero Body kit</th>
            <td></td>
            <td>US $</td>
        </tr>
        <tr>
            <td>FRONT BUMPER / SIDE SKIRTS / FRONT FENDERS / REAR FENDERS / DUCKBILL / GT WING / REAR DIFFUSER / DRL LIGHTS</td>
            <td>FRP</td>
            <td><b>$14,950</b></td>
        </tr>
    </table>

    <div class="contact">
    <h1>DN HOLDINGS</h1><h3>Customer Service</h3><h1>+254 741-123-363</h1>
    </div>

    <hr style="width:90%">

    <div class="heading2">
        <h2><a href="Pandem.php">PANDEM</a></h2>
    </div>

    <?php require 'Footer.php';?>
  
</body>
</html>