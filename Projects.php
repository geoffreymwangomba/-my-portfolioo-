
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta  name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "geoffrey";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>



    <nav class="navbar">
        <div class="navdiv">
            <div class="nav_name">
                <h3>Geoffrey Mwangomba</h3>
            </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Projects.php">Projects</a></li>
                    <li><a href="Contacts.php">Contacts</a></li>
                    <li><a href="Skills.php">Skills</a></li>
                </ul>
        </div>
    </nav>

<section class="project">
    <div class="project_header">
        <h2>Projects</h2>
    </div>
    <div class="description">
        <div class="image_desc">
            <img src="pic/img-5.jpg" alt="pic">
            <h5>graphic design</h5>
            <p>Expects in creating different <br> design that 
                every constomer expert <br> <a href="">read More</a></p>
        </div>
        <div class="image_desc">
            <img src="pic/img-6.jpg" alt="pic">
            <h5>Web development</h5>
            <p>Expects in creating different<br> website for 
                our customer<br> <a href="">read More</a></p>
        </div>
        <div class="image_desc">
            <img src="pic/img-7.jpg" alt="pic">
            <h5>Website Hosting</h5>
            <p>we host website at an affordable <br> price 
            for any organisation<br> <a href="">read More</a></p>
        </div>
        
    </div>
</section>
<footer>
    <div class=" main_footer">
        <div ><br>
            <h2><span>Contact</span> Info</h2>
        
                    Mr Mwangomba<br>P.O.Box 777<br>Lilongwe <br> Malawi
            
                    <p>
                        <a href="">+265 882 851 116</a>
                    </p>
                
                    <p>
                        <a href="">geoffreymwangomba@gmail.com</a> 
                    </p>
        </div>

        <div class="links"><br>
            <h2><span>Social</span> Media</h2>
            <ul>
                <li><img src="pic/in.png" alt=""></li>
                <li><img src="pic/inst.png" alt=""></li>
                <li><img src="pic/face.jpg" alt=""></li>
                <li><img src="pic/whatsapp.jpg" alt=""></li>
                
            </ul>
        </div>
    </div>
    <div>

    </div>
</footer>
<script src="app.js"></script>

</body>
</html>