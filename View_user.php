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

    <div class="container">
    <h2>Users</h2>

    <?php
      // Database connection 
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "website1";

      $conn = mysqli_connect($servername, $username, $password, $database);

      // Check connection
      if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
      }

      // Update User in Database + Prepare & Exec Statements
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_user'])) {
        $user_id = intval($_POST['user_id']);
        $username = $_POST['username'];
        $email = $_POST['email'];

        $update_sql = "UPDATE users SET username = ?, email = ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("ssi", $username, $email, $user_id);

        if ($update_stmt->execute()) {
          echo "<p style='color: green; font-weight: bold;'> User updated successfully.</p>";
        } else {
          echo "<p style = 'color: red; font-weight: bold;'> Error updating user: " . $conn->error . "</p>";
        }

        $update_stmt->close();
      }

      // Deletion Prepare and Exexute Statements
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
        $delete_id = intval($_POST['delete_id']);
        $delete_sql = "DELETE FROM users WHERE id = ?";
        $stmt = $conn->prepare($delete_sql);
        $stmt->bind_param("i", $delete_id);

        if ($stmt->execute()) {
          echo "<p style = 'color: green; font-weight: bold;'> User deleted successfully.</p>";
        } else {
          echo "<p>Error deleting user: " . $conn->error . "</p>";
        }

        $stmt->close();
      }

      // SQL query to Get users from database and Read
      $sql = "SELECT id, username, email FROM users";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
              </tr>";

        // Loop through each user record
        while ($row = $result->fetch_assoc()) {
          echo "<tr id='user-" . $row["id"] . "'>
                <td>" . $row["id"] . "</td>
                <td>" . $row["username"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>
                  <a href='Update_User.php?id=" . $row["id"] . "'>Update</a> / 
                  <form method='post' action='' style='display:inline;' onsubmit='return confirm(\"Are you sure you want to delete this user?\");'>
                    <input type='hidden' name='delete_id' value='" . $row["id"] . "'>
                    <button type='submit' style='background:none;border:none;color:#ff6600;text-decoration:underline;cursor:pointer;'>Delete</button>
                  </form>
                </td>
              </tr>";
        }
        echo "</table>";
      } else {
        echo "No users found.";
      }

      $conn->close();
    ?>

  </div>
</body>
</html>