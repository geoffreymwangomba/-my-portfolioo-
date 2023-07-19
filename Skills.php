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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Projects.php">Projects</a></li>
                    <li><a href="Contacts.php">Contacts</a></li>
                    <li><a href="Skills.php">Skills</a></li>
                </ul>
        </div>
    </nav>


<section class="Section_3">
    <div>
        <h2> <span>Skills</span> and Tools</h2>
    </div>
    <div>
       

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
</body>
</html>