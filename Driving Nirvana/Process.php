    <?php
    ob_start();
    if (isset($_POST['emailaddress']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['password'])) {
        include 'dbconnect.php';
    
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
        $emailaddress = validate($_POST['emailaddress']);
        $firstname = validate($_POST['firstname']);
        $lastname = validate($_POST['lastname']);
        $username = validate($_POST['username']);
        $password = validate($_POST['password']);
    
        if (empty($emailaddress) || empty($firstname) || empty($lastname) || empty($username) || empty($password)) {
            header("location:DNSign-up.php");
            exit();
        } else {
            $sql = "INSERT INTO users(emailaddress, firstname, lastname, username, password) VALUES('$emailaddress', '$firstname', '$lastname', '$username', '$password')";
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                header("location:Index.php");
                exit();
            } else {
                echo "An error occurred! User not registered";
            }
        }
    }
    ob_end_flush();
    ?>