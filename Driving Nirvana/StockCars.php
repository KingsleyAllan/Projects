<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="Homepage/DN Logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driving Nirvana | Stock Cars.</title>

    <style>

        .heading{
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: large;
            padding-top: 20px;
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
            font-size: larger;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
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
            margin-top: 50px;
        }

    </style>
</head>
<body>
    
    <?php require 'Nav.php';?>

    <div class="heading">
        <h2>STOCK CARS</h2>
    </div>

    <hr style="width:93%">

    <div class="apple">
        <div>
            <a href="HuracanStockCars.php"><img src="Lamborghini Huracan.jpg" alt="..." width="600px"></a>
            <p><a href="HuracanStockCars.php">LB-SILHOUETTE GT WORKS LAMBORGHINI HURACAN</a></p>
        </div>
        <div>
            <a href="HuracanStockCars2.php"><img src="Huracan2.jpg" alt="..." width="600px"></a>
            <p><a href="HuracanStockCars2.php">LB WORKS LAMBORGHINI HURACAN LP610-4</a></p>
        </div>
        <div>
            <a href="R34Skyline.php"><img src="R34 SKYLINE.jpg" alt="..." width="600px"></a>
            <p><a href="R34Skyline.php">LB-ER34 SUPER SILHOUETTE SKYLINE FULL COMPLETE</a></p>
        </div>
        <div>
            <a href="Ferrari458StockCars.php"><img src="Ferrari 458.jpg" alt="..." width="600px"></a>
            <p><a href="Ferrari458StockCars.php">LB-WORKS FERRARI 458 ITALIA FULL COMPLETE</a></p>
        </div>
        <div>
            <a href="R35Type2StockCars.php"><img src="R35 GTR Type2S.jpg" alt="..." width="600px"></a>
            <p><a href="R35Type2StockCars.php">LB-WORKS R35 GT-R TYPE2 FULL COMPLETE</a></p>
        </div>
        <div>
            <a href="R35Type1.5StockCars.php"><img src="R35 GTR Type1.5S.jpg" alt="..." width="600px"></a>
            <p><a href="R35Type1.5StockCars.php">LB-WORKS R35 GT-R TYPE1.5 FULL COMPLETE</a></p>
        </div>
        <div>
            <a href="R35Type1StockCars.php"><img src="R35 GTR Type 1S.jpg" alt="..." width="600px"></a>
            <p><a href="R35Type1StockCars.php">LB-WORKS R35 GT-R TYPE1 FULL COMPLETE</a></p>
        </div>
        <div>
            <a href="E92.php"><img src="E92S.jpg" alt="..." width="600px"></a>
            <p><a href="E92.php">LB-WORKS BMW M3 E92 FULL COMPLETE</a></p>
        </div>
        
    </div>  
    
    <?php require 'Footer.php';?>

</body>
</html>