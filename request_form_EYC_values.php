<?php
/*
Capture input values from $_POST array and store them in separate variables.
Variables in php start with $
*/

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$pnum = $_POST["pnum"];
$address = $_POST["address"];

echo "This is Your Request Form Information.";
echo "<br>";
echo "<br>";

// print each column to the screen
echo "First Name: " . $fname;
echo "<br>";
echo "Last Name: " . $lname;
echo "<br>";
echo "Email: " . $email;
echo "<br>";
echo "Phone Number: " . $pnum;
echo "<br>";
echo "Address: " . $address;
echo "<br>";

// use these variables to establish a connection with the database
$servername = "localhost";
$username = "akinyemi_EYC";
$password = "562606_";
$dbname = "elevate_your_cards";

// create the connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check the connection
if ($conn ->connect_error) {
    die("Connection Failed: " . $conn ->connect_error);
}

$sql = "INSERT INTO request_form_eyc2 (first_name, last_name, email, phone_number, address)
        VALUES ('$fname', '$lname', '$email', '$pnum', '$address')";

if ($conn ->query($sql) === TRUE) {
    echo "<br>";
    echo "'Elevate Your Cards' Request Information Added Successfully.";
}
else {
    echo "Error: " . $sql . "<br>" . $conn ->error;
}

$conn ->close();

?>