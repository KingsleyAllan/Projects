<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="Homepage/DN Logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>

        body{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: large;
        }
        .logo {
		  font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
		  font-weight:900;
		  font-size: 25px;	
          text-align: center; 
		}

        p{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: x-large;
            text-align: center;
        }

        input[type=text] {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            border: 1px solid #424242;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=password] {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            border: 1px solid #424242;
            border-radius: 4px;
            box-sizing: border-box;
        }
  
        input[type=submit] {
            width: 40%;
            text-align: center;
            margin-left: 900px;
            background-color: black;
            color: white;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: large;
            font-weight: bold;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 60px;
            cursor: pointer;
            transition: color 0.5s ease;
        }
  
        input[type=submit]:hover {
            background-color: rgb(214, 212, 212);
            color: black;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .alert{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: red;
            color: white;
            opacity: 1;
            border-radius: 20px;
            transition: opacity 0.6s;
        }

    </style>
</head>
<body>
    <div class="logo">
        <h1>DRIVING NIRVANA</h1>
    </div>

    <p>Welcome back.</p>

    <form method = "post" action = "">
        <div class="container">

          <input type="text" name="username" placeholder="Username" required>
      
          <input type="password" name="password" placeholder="Enter Password" required><br>
      
          <input type="submit" name="submit" value="Login"><br>

          <hr style="width:50%">

          <p style="font-size: large;">Don't have an account?</p>

          <input type="submit" onclick="document.location='DNSign-up.php'" value="Create Account">

        </div>
    </form>

    <?php

		if (isset($_POST['submit'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

		// Connect to database
		$db = mysqli_connect('fdb1028.awardspace.net', '4305838_dndb', 'Callmeanytime125', '4305838_dndb');

		// Check if username and password match
		$query = "SELECT * FROM users WHERE username = '$username' AND password='$password'";
		$result = mysqli_query($db, $query);

		if (mysqli_num_rows($result) > 0) {
			// Login successful, redirect to home.php
			header("Location: Index.php");
			exit;
			} else {
				echo "<div class='alert' role='alert'><b>ERROR!</b><br>Invalid username or password.</div>";
			}
		}

	?>

    <?php require 'Footer.php';?>

</body>
</html>