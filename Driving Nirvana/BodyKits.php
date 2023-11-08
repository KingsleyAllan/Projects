<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="Homepage/DN Logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driving Nirvana | Bodykits.</title>

    <style>

        .heading{
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: large;
            padding-top: 20px;
        }

        .lb{
            display: flex;
            flex-wrap: wrap;
            padding: 18px;
        }

        .lb img:hover{
            opacity: 0.6;
            transition: 0.5s;
        }

        .lb p{
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: larger;
            font-weight: bolder;
            color: black;
        }

        .lb p a{
            text-decoration: none;
            color: black;
        }

        .lb p a:hover{
            color: rgb(94, 94, 94);
        }

        .lb div{
            padding: 2px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
        }

        .apple{
            display: flex;
            flex-wrap: wrap;
            padding: 18px;
        }

        .apple img:hover{
            opacity: 0.6;
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
            padding: 2px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
        }

    </style>
</head>
<body>

    <?php require 'Nav.php';?>

    <div class="heading">
        <h2>BODY KITS</h2>
    </div>

    <hr style="width:93%">

    <div class="lb">
        <div>
            <a href="LB.php"><img src="LB.jpg" alt="..." width="100%"></a>
            <p><a href="LB.php">LIBERTY WALK</a></p>
        </div>
    </div>

    <div class="apple">
        <div>
            <a href="Pandem.php"><img src="Pandem.png" alt="..." width="100%"></a>
            <p><a href="Pandem.php">PANDEM</a></p>
        </div>
    </div>

    <?php require 'Footer.php';?>

</body>
</html>