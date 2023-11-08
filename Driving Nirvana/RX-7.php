<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="Homepage/DN Logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driving Nirvana |LB-Super Silhouette Mazda RX-7</title>

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
      <img src="Slide285.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide286.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide287.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide288.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide289.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide290.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide291.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide292.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide293.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide294.jpg" style="width:100%">
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
    
    <h1 class="heading">LB-SUPER SILHOUETTE MAZDA FD3S RX-7</h1>
    <br>

    <table class="centre">
        <tr>
            <th>LB-Super Silhouette RX-7 Complete Body Kit</th>
            <td>US $</td>
        </tr>
        <tr>
            <td>FRONT BUMPER / BUMPER FOG COVER / FRONT FENDER / SIDE SKIRT & SIDE PANEL /<br>
                REAR FENDER / REAR BUMPER / REAR WING / REAR GATE / BONNET HOOD / HEAD LIGHT COVER / REAR DIFFUSER</td>
            <td><b>$24,959</b></td>
        </tr>
    </table>

    <div class="contact">
    <h1>DN HOLDINGS</h1><h3>Customer Service</h3><h1>+254 741-123-363</h1>
    </div>

    <hr style="width:90%">

    <div class="heading2">
        <h2><a href="LB.php">LIBERTY WALK</a></h2>
    </div>

    <?php require 'Footer.php';?>
  
</body>
</html>