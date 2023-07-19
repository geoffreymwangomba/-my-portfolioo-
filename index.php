<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="Projects.php">Projects</a></li>
                    <li><a href="Contacts.php">Contacts</a></li>
                    <li><a href="Skills.php">Skills</a></li>
                </ul>
        </div>
    </nav>
 <section class = "section_profile">
    <div class="inner_section">
        <div class="image">
            <img src="pic/icon.jpg" alt="pic">
        </div>
     <div class="profile">
        <P>
       
        <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM web";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["aboutme"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    ?>


     </div>
    </div>
   
 </section>
 <div class="screenshots">
    <h2>Project Screen<span>Shots</span></h2>
 </div>
 
<section class="image_slide">
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <div class="slide first">
                <img src="pic/45.jpg" alt="pic">
            </div>
            <div class="slide">
                <img src="pic/home_post_2-1.gif" alt="pic">
            </div>
            <div class="slide">
                <img src="pic/Website-Designa.png" alt="pic">
            </div>
            <div class="slide">
                <img src="pic/kai-rohweder-HWAYMtOZjHU-unsplash.jpg" alt="pic">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>
</section>

<section class="Section_3">
    <div>
        <h2> <span>Skills</span> and Tools</h2>
    </div>
    <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM web";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["skills"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    // Close the connection
    $conn->close();
    ?>
</section>

<footer>
    <div class=" main_footer">
        <div ><br>
            <h2><span>Contact</span> Info</h2>
        
                 





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
<script type="text/javascript">
    var counter=1;
    setInterval(function(){
document.getElementById('radio' + counter).checked=true;
counter++;
if(counter > 4){
    counter = 1;
}
}, 3000);
</script>
</body>
</html>