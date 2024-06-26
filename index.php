<?php require_once ("templates/nav.php");?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/structure1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home Page</title>
</head>
<body>
    
    <br><br><br><br>
   <div class="container">
    <form method="post" action="process_form.php">
        <input type="text" name="search_query" placeholder="Search for items or brands">
        <button type="submit"><i class='bx bx-search-alt-2'></i></button>
    </form>
   </div>
   <div class="Welcome">
    <p style="text-transform: capitalize;font-weight: bolder;text-align: center;font-size: x-large;">Welcome to Wardrobe Galore!</p><br>
    <p style="text-align: center;">where fashion meets style</p>
   </div>
   
   <div class="slider-wrapper">
    <div class="image-list">
        <img src="Images/img1.jpg" alt="img-1" class="image-item">
        <img src="Images/img2.jpg" alt="img-2" class="image-item">
        <img src="Images/img3.jpg" alt="img-3" class="image-item">
        <img src="Images/img4.jpg" alt="img-1" class="image-item">
        <img src="Images/img5.jpg" alt="img-1" class="image-item">
        <img src="Images/img6.jpg" alt="img-1" class="image-item">
        <img src="Images/img7.jpg" alt="img-1" class="image-item">
        <img src="Images/img8.jpg" alt="img-1" class="image-item">
        <img src="Images/img9.jpg" alt="img-1" class="image-item">
        <img src="Images/img10.jpg" alt="img-1" class="image-item">
    </div>
   </div>

   <div class="redirect">
    <a href="./profile.php">CLICK HERE TO SHOP OUR LATEST DROPS</a>
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
