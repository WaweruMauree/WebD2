<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav>
        <div class="logo">WardrobeGalore</div>
        <ul class="menu">
            <li><a href="./index.html">Home</a></li>
            <li>
                <a href="./profile.html">Just For You</a>
                <ul class="dropdown">
                    <li><a href="#">Our Offers</a></li>
                    <li><a href="#">Collections</a></li>
                    <li><a href="#">Season Favorites</a></li>
                </ul>
            </li>
            <li><a href="./aboutus.html">AboutUs</a></li>
            <li><a href="./initiative.html">Initiative</a></li>
            <li><a href="./interact.html">Our Socials</a></li>
            <li><a href="./location.html">Locate Us</a></li>
            <li><a href="./signin.html">Sign In</a></li>
        </ul>
    </nav>

    <div class="container">
    <h2>Register</h2>
    <form action="Register.php" method="post">
        <label for="user_name">Username:</label>
        <input type="text" id="user_name" name="user_name" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Register">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection details
        $servername = "localhost"; 
        $username = "root"; 
        $password = "";  
        $database = "website1"; 

        $conn = mysqli_connect($servername, $username, $password, $database);
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        
        // Taking all 3 values from the form data(input)
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        
        // Performing insert query execution
        // Here, specify the columns explicitly
        $sql = "INSERT INTO users (username, password, email) VALUES ('$user_name', '$password', '$email')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>Thank you for Registering
            Our Team will respond shortly to you via E-Mail.</h3>"; 
            
        } else{
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
    }
    ?>
</div>
</body>
</html>