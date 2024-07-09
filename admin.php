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
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">0 results</td>
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
</section>
</body>
</html>