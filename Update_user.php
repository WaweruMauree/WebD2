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
        <h2>Edit  User</h2>

        <?php
        //Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "website1";

        $conn = mysqli_connect($servername, $username, $password, $database);

        //check connection
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])){
            $user_id = intval($_POST['user_id']);
            $username = $_POST['username'];
            $email = $_POST['email'];

            //update user details in the database
            $sql = "UPDATE users SET username = ?, email = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssi", $username, $email, $user_id);

            if($stmt->execute()){
                echo"<p style= 'color: green; font-weight: bold;'> User updated successfully.</p>";
            } else{
                echo "<p style = 'color: red; font-weight: bold;'> Error updating user " .$conn->error . "</p>";
            }

            $stmt->close();
        }

        //check if ID parameter is provided
        if( isset($_GET['id'])){
            $user_id = intval($_GET['id']);

            //Fetch user details from database
            $sql = "SELECT id, username, email FROM users WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows === 1){
                $row = $result->fetch_assoc();

                //Display user details in form for editing
                echo "<form method= 'post' action = 'updtae_user.php'>";
                echo "<input type='hidden' name='user_id' value='" . $row['id'] . "'>";
                echo "<label for='username'>Username:</label>";
                echo "<input type= 'text' id='username' name='username' value='" .$row['username'] . "'><br><br>";
                echo "<label for='email'>Email:</label>";
                echo "<input type= 'email' id='email' name='email' value='" .$row['email'] . "'><br><br>";
                echo "<button type= 'submit'>Update User</button>";
                echo "</form>";
            }else{
                echo "User not found.";
            }

            $stmt->close();
        }

        $conn->close();
        ?>

    </div>
    </body>
    </html>

    <!--Back to users html redirect-->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <a href="view_users.php">Back to Users</a>
    </div>
</body>
</html>