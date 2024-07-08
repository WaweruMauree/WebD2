<?php require_once ("templates/nav.php");?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/structure7.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>

    <body>
       
        <br><br><br>
   
        <div class="wrapper">
            <form action="">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit" class="btn">Login</button>

                <div class="register-link">
                    <p>Don't have an account? <a href="Register.php">Register</a></p>
                </div>

            </form>
        </div>

           <!--contact start-->
           <section class="contact" id="contact">
            <div class="main-contact">
                <div class="contact-content">
                    <li><a href="./aboutus.php">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#faq">Faq</a></li>
                </div>

                <div class="contact-content">
                    <li><a href="#">Shipping & Returns</a></li>
                    <li><a href="#">Store Policy</a></li>
                    <li><a href="#">Payment Methods</a></li>
                </div>
                <div class="contact-content">
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Tel: 0789345674</a></li>
                </div>
            </div>
        </section>
        <div class="last">
            <p>&copy 2024 by Wardrobe Galore</p>
        </div>
         
    </body>

