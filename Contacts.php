<!DOCTYPE html>
<html>
<head>
<title>contact</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="navdiv">
            <div class="nav_name">
                <h3>Geoffrey Mwangomba</h3>
            </div>
    >
           
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Projects.php">Projects</a></li>
                    <li><a href="Contacts.php">Contacts</a></li>
					 <li><a href="Skills.php">Skills</a></li>
                </ul>
        </div>
    </nav>
    <h3>Contact information</h3>

<div>
    <form>

 <label for Firstname>First name</label><br>
<input type="text" id="input id" name="Fistname"/><br>
<label for Lastname>Lastname</label><br>
<input type="text id=input id" name="Lastname"/><br>
<label for email>email</label><br>
<input type="email" id="email" name="email" required><br>
<label for male>male</label>
<input type="radio" id="male" name="gender" value="Male"/><br>
<label for Female>Female</label>
<input type="radio" id="Female" name="gender" value="Female"/><br>
</div>
</form>
<br>

<br>  

<input type="submit" id="Login"name="Login"/>
<br><br><br><br><br><br><br>
<br><br><br><br>

<br><br><br><br><br><br>
<br><br>
<footer>
    <div class=" main_footer">
        <div ><br>
            <h2><span>Contact</span> Info</h2>
            <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM web";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["contacts"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    // Close the connection
    $conn->close();
    ?>
        </div>
</body>
</html>