<html>
<body>
Thank you for submitting your travel agent contact request! Here is the information you submitted:

Client Name: <?php echo $_POST["First Name " + "Last Name"]; ?><br>
Client Phone Number: <?php echo $_POST["phoneNumber"]; ?><br>
Client Email: <?php echo $_POST["emailAddress"]; ?><br>
Number of Adults: <?php echo $_POST["Number of Adults"]; ?><br>
Number of Children: <?php echo $_POST["Number of Children"]; ?><br>
Destination: <?php echo $_POST["Destination"]; ?><br>
Travel Dates: <?php echo $_POST["Trip Date"]; ?><br>
Interested Activities: <?php echo $_POST[""]; ?><br>

An agent will be in touch with you soon!

<?php
// Create database
$sql = "CREATE DATABASE FormData";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

// sql to create table
$sql = "CREATE TABLE MyClients (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
phonenumber CHAR(10) NOT  NULL,
email VARCHAR(50) NOT NULL,
adults INT(2),
children INT(2),
destination VARCHAR(30)
dates DATE,
activities VARCHAR"
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyClientss created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

// Insert data

$sql = "INSERT INTO MyClients (firstname, lastname, phonenumber, email, adults, children, destination, dates, activities)
VALUES (echo 'First Name', echo 'Last Name', echo 'phoneNumber', echo 'emailAddress', echo 'Number of Adults', echo 'Number of Children', echo 'Destination', echo 'Trip Date', echo 'Activities')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
</body>
</html>