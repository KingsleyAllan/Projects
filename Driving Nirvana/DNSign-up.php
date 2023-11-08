<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="Homepage/DN Logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Now</title>

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
            background-color:  rgb(214, 212, 212);
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

    <p>Now let's make you a Member.</p>
    
    <form action="Process.php" method="post">
        <div class="container">

          <input type="text" name="emailaddress" placeholder="Email Address" required>

          <input type="text" name="firstname" placeholder="First Name" required>

          <input type="text" name="lastname" placeholder="Last Name" required>

          <input type="text" name="username" placeholder="Username" required>
      
          <input type="password" name="password" placeholder="Enter Password" required>
          
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me<br>
          </label>
          
          <label>
            <input type="checkbox" checked="checked" name="Terms" style="margin-bottom:15px">By creating an account you agree to our <b>Terms of use</b> and <b>Privacy Policy</b>.</p>
          </label>

          <input type="submit" name="submit" value="Create Account"><br>

          <hr style="width:50%">

          <p style="font-size: large;">Already have an account?</p>

          <input type="submit" onclick="document.location='DNLogin.php'" value="Login">

        </div>
    </form>
    
    <?php require 'Footer.php';?>
    
</body>
</html>