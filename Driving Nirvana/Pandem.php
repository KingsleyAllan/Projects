<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="Homepage/DN Logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driving Nirvana | Pandem Rocket Bunny</title>

    <style>

        .heading{
            text-align: center;
            font-size:40px;
            padding-top: 0px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
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
        <h2>PANDEM</h2>
    </div>
    
    <img src="Pandem home.png" alt="..." width="100%">

    <hr style="width:95%">

    <div class="apple">
        <div>
            <a href="C5.php"><img src="C5.png" alt="..." width="600px"></a>
            <p><a href="C5.php">PANDEM - CORVETTE C5</a></p>
        </div>
        <div>
            <a href="190E.php"><img src="190E.png" alt="..." width="600px"></a>
            <p><a href="190E.php">PANDEM - MERCEDES BENZ 190E W201</a></p>
        </div>
        <div>
            <a href="E31.php"><img src="E31.png" alt="..." width="600px"></a>
            <p><a href="E31.php">PANDEM - BMW E31</a></p>
        </div>
        <div>
            <a href="BRZ.php"><img src="BRZ.png" alt="..." width="600px"></a>
            <p><a href="BRZ.php">PANDEM - SUBARU BRZ</a></p>
        </div>
        <div>
            <a href="PR35.php"><img src="R35P.png" alt="..." width="600px"></a>
            <p><a href="PR35.php">PANDEM - NISSAN GT-R (R35)</a></p>
        </div>
        <div>
            <a href="E36.php"><img src="E36.png" alt="..." width="600px"></a>
            <p><a href="E36.php">PANDEM - BMW E36 M3</a></p>
        </div>
        <div>
            <a href="E46.php"><img src="E46.png" alt="..." width="600px"></a>
            <p><a href="E46.php">PANDEM - BMW E46 M3</a></p>
        </div>
        <div>
            <a href="R32.php"><img src="R32.png" alt="..." width="600px"></a>
            <p><a href="R32.php">PANDEM - NISSAN GTR (R32)</a></p>
        </div>
        <div>
            <a href="Golf.php"><img src="Golf.png" alt="..." width="600px"></a>
            <p><a href="Golf.5.php">PANDEM - VOLKSWAGEN GOLF (MK7)</a></p>
        </div>

        <div>
            <a href="A90.php"><img src="A90.png" alt="..." width="600px"></a>
            <p><a href="A90.php">PANDEM - TOYOTA A90 SUPRA</a></p>
        </div>

        <div>
            <a href="GR86.php"><img src="GR86.png" alt="..." width="600px"></a>
            <p><a href="GR86.php">PANDEM - GR86 AERO KIT</a></p>
        </div>
    </div>
    
    <?php require 'Footer.php';?>
   
</body>
</html>