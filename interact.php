<?php require_once ("templates/nav.php");?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/structure5.css">
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Interact With Us</title>
</head>
    <body>
      
        <br><br><br>
        <div class="container">
            <h1>Connect With Us</h1>
            <p>We would love to respond to your queries and help you succeed.<br>Feel free to get in touch with us.</p>
            <div class="contact-box">
                <div class="contact-left">
                    <h3>Send your request</h3>
                    <form>
                        <div class="input-row">
                            <div class="input-group">
                                <label>Name</label>
                                <input type="text" placeholder="">
                            </div>
                            &nbsp&nbsp&nbsp<br>
                            <div class="input-group">
                                <label>Phone</label>
                                <input type="text" placeholder="">
                                <br><br><br>
                            </div>
                            &nbsp&nbsp&nbsp<br>
                            <div class="input-group">
                                <label>Email</label>
                                <input type="email" placeholder="">
                            </div>
                            <div class="input-group">
                                <label>Subject</label>
                                <input type="text" placeholder="">
                            </div>
                        </div>

                        <label>Message</label>
                        <textarea rows="5" placeholder="Your message"></textarea>

                        <button type="submit">SEND</button>

                        <?php
                         // Checks if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "website1";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepares to Fetch User Info and Insert into Database//
            $stmt = $conn->prepare("INSERT INTO Contacts (name, email, message) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $message);

            // Set parameters and execute
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $stmt->execute();

            // Close statement and connection
            $stmt->close();
            $conn->close();

            // Provide feedback to the user
            echo "<p>Thankyou! Your Message has been sent successfully!</p>";
                
        }
            ?>
                    </form>
                </div>
                <div class="contact-right">
                    <h3>Reach Us</h3>

                    <table>
                        <tr>
                            <td>Email</td>
                            <td>wardrobegalore@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>0778905692</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer-container">
                <div class="socialIcons">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-google-plus"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Copyright &copy;2022; Designed by <span class="designer">WardrobeGalore</span></p>
            </div>
        </footer>
        
      
    </body>
