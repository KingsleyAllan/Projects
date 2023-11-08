<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="Homepage/DN Logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driving Nirvana | Stock Cars | LB-WORKS Nissan GT-R R35 Type 2</title>

    <style>
    
        * {box-sizing:border-box}
    
        .slideshow-container {
            max-width: 90%;
            position: relative;
            margin: auto;
        }
    
        .mySlides {
            display: none;
        }
    
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
    
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
    
        .prev:hover, .next:hover {
            background-color: none;
        }
    
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

    <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="Slide272.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide273.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide274.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide275.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide276.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide277.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide278.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide279.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide280.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide281.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide282.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide283.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="Slide284.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
  
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

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

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
            <td rowspan="2"><b>LB-WORKS NISSAN R35 GT-R TYPE2</b></td>
            <td>PRICE</td>
        </tr>
        <tr>
            <td><b>$96,012</b></td>
        </tr>
    </table><br>

    <p>LB-WORKS GTR type2 is new stock! The "type2" body kit, which has a reputation for its racing design among LB-GTR! Overwhelming force unified in white! “The<br>
        content is solid, the appearance is simple”. The muffler sound is comfortable, and the design combines elegance and strength. It is one that makes drivers happy. *<br>
        Vehicle width official vehicle inspection acquired! Please consider it!</p>

    <hr style="width:95%"> 
    
    <h4>EXTERIOR / INTERIOR / DETAIL</h4>
    <ul>
        <li>LB-WORKS R35 GTR type2 Full Complete(B/H,R/W CFRP)</li>
        <li>Valenti headlight</li>
        <li>Valenti tail lamp</li>
        <li>Airrex 4-wheel independent air suspension</li>
        <li>FI exhaust muffler with variable valve</li>
        <li>LD97 (T06) 20inchAW</li>
        <li>Reupholstery of seats and other interior</li>
        <li>Carbon steering leather replacemen</li>
        <li>Interior panel carbon</li>
        <li>Center console carbon cover</li>
        ETC
    </ul>

   <p>User purchase, dealer car, complete, airbag, ABS, air conditioner, power steering, power window, anti-theft system, anti-skid device, genuine navigation, genuine<br>
    audio, CD, DVD, aftermarket wheel 20 inch, aftermarket wheel, leather seat, Keyless, Back camera, ETC, Aero, Power seat, Collision safe body, Air suspension<br>
    slowdown, Smart key, Auto cruise, Spare key, Manual included.</p><br>

    <hr style="width:95%"> 

    <div class="contact">
        <h1>DN HOLDINGS</h1><h3>Customer Service</h3><h1>+254 741-123-363</h1>
    </div>
    
    <?php require 'Footer.php';?>

</body>
</html>