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
                                <input type="email" placeholder="">
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
