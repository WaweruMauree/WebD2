<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/admin.css">
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
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </li>
            <li><a href="./aboutus.html">AboutUs</a></li>
            <li><a href="./initiative.html">Initiative</a></li>
            <li><a href="./interact.html">Our Socials</a></li>
            <li><a href="./location.html">Locate Us</a></li>
            <li><a href="./signin.html">Sign In</a></li>
        </ul>
    </nav>
    <br><br><br><br>

<div class="container">
    <?php if (isset($message)): ?>
        <!-- Display any messages (like success or error messages) -->
        <div class="message">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <h2>Create New Customer</h2>
    <!-- Form for creating a new user -->
    <form method="post" action="">
        Name: <input type="text" name="name" required><br>
        Email: <input type="text" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" name="create" value="Create">
    </form><br>
    
    <h2>List of customers</h2>
    <!-- Table displaying the list of users -->
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php if ($result->num_rows >= 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">0 result</td>
            </tr>
        <?php endif; ?>
    </table>

    <h2>Update Customers</h2>
    <!-- Form for updating an existing user -->
    <form method="post" action="">
        id: <input type="number" name="id" required><br>
        Name: <input type="text" name="name" required><br>
        Email: <input type="text" name="email" required><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="update" value="Update">
    </form><br>

    <h2>Delete A Customer</h2>
    <!-- Form for deleting a user -->
    <form method="post" action="">
        id: <input type="number" name="id" required><br>
        <input type="submit" name="delete" value="Delete">
    </form>
</div>

<!--start of connection-->
<?php
// connection.php content
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Handle Create operation
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    // Hash the password before storing it
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insert new user into the database
    $sql = "INSERT INTO customers (Name, Email, Password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        $message = "New record created successfully";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle Read operation - fetch all users
$sql = "SELECT id, name, email FROM customers";
$result = $conn->query($sql);

// Handle Update operation
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if password is provided and hash it
    if (!empty($password)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // Update user information with new password
        $sql = "UPDATE customers SET name='$name', email='$email', password='$hashedPassword' WHERE id=$id";
    } else {
        // Update user information without changing the password
        $sql = "UPDATE customers SET name='$name', email='$email' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        $message = "Record updated successfully";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle Delete operation
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    // Delete user from the database
    $sql = "DELETE FROM customers WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        $message = "Record deleted successfully";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
</body>
</html>