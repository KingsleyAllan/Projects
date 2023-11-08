<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="shortcut icon" href="DN Logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driving Nirvana</title>

    <style>
        
        .column {
            float: left;
            width: 33.33%;
            padding: 0px;
        }

        .row{
            margin-top: 50px;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .gallery img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
        }

        .apple{
            display: flex;
            flex-wrap: wrap;
        }

        .apple img:hover{
            opacity: 0.8;
            transition: 0.5s;
        }

        .apple p{
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: larger;
            font-weight: bolder;
            color: black;
        }

        .apple p a{
            text-decoration: none;
            color: black;
        }

        .apple p a:hover{
            color: rgb(94, 94, 94);
        }

        .apple div{
            padding: 5px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 40px;
        }

        .membership{
            height: 280px;
            background-color: black;
            color: white;
        }

        .membership h1{
            padding-top: 25px;
            padding-left: 58px;
            font-size: 40px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .membership p{
            padding-left: 58px;
            font-size: larger;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .nav-links2{
            margin-left: 10px;
            padding-top: 25px;
        }

        .nav-links2 a{
            margin-left: 10px;
            color: black;
            background-color: white;
            text-align: center;
            padding: 200px;
            padding: 14px 16px;
            text-decoration: none;
            border-radius: 250px;
            font-size: 17px;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: 900;
            transition: color 0.5s ease;
        }

        .nav-links2 a:hover{
            background-color: rgb(214, 212, 212);
            color: black;
        }

    </style>
</head>
<body>

    <?php require 'Nav.php';?>
    
    <img src="Tokyo.jpg" alt="..." width="100%">

    <div class="row">
        <div class="column">
            <img src="Gallery1.jpg" alt="..." width="100%">
        </div>
        <div class="column">
            <img src="Gallery2.jpeg" alt="..." width="100%">
        </div>
        <div class="column">
            <img src="Gallery3.jpg" alt="..." width="100%">
        </div>
    </div>  

    <div class="apple">
        <div>
            <a href="StockCars.php"><img src="Gallery.jpg" alt="..." width="100%"></a>
            <p><a href="Stockcars.php">STOCK CARS</a></p>
        </div>
        <div>
            <a href="BodyKits.php"><img src="bodykit.jpg" alt="..." width="100%"></a>
            <p><a href="BodyKits.php">BODY KITS</a></p>
        </div>
    </div>

    <nav class="membership">
        <h1>BECOME A<br>
            MEMBER</h1>

        <P>Sign Up for free . Join the community</P>

        <ul class="nav-links2">
            <a href="DNSign-up.php">SIGN UP</a>
            <a href="DNLogin.php">LOGIN</a>
        </ul>
    </nav>

    <?php require 'Footer.php';?>
    
</body>
</html>