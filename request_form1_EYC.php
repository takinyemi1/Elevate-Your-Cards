<?php

/*
Capture input values from $_POST array and store them in separate variables.
Variables in php start with $.*/

$rfname = $_POST["rfname"];
$rlname = $_POST["rlname"];
$rpnum = $_POST["rpnum"];
$raddress = $_POST["raddress"];
$rhobby1 = $_POST["rhobby1"];
$rhobby2 = $_POST["rhobby2"];
$rhobby3 = $_POST["rhobby3"];
$rhobby4 = $_POST["rhobby4"];
$rhobby5 = $_POST["rhobby5"];
$msg = $_POST["message"];

echo "This is Your Recipient's Request Form Information.";
echo "<br>";
echo "<br>";

// print each column to the screen
echo "Recipient's First Name: " . $rfname;
echo "<br>";
echo "Recipient's Last Name: " . $rlname;
echo "<br>";
echo "Recipient's Phone Number: " . $rpnum;
echo "<br>";
echo "Recipient's Address: " . $raddress;
echo "<br>";
echo "Recipient's First Hobby: " . $rhobby1;
echo "<br>";
echo "Recipient's Second Hobby: " . $rhobby2;
echo "<br>";
echo "Recipient's Third Hobby: " . $rhobby3;
echo "<br>";
echo "Recipient's Fourth Hobby: " . $rhobby4;
echo "<br>";
echo "Recipient's Fifth Hobby: " . $rhobby5;
echo "<br>";
echo "Personalized Message for the Recipient: " . $msg;
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

$sql = "INSERT INTO request_form1_eyc (recipient_first_name, recipient_last_name, recipient_phone_number, recipient_address,
        recipient_first_hobby, recipient_second_hobby, recipient_third_hobby, recipient_fourth_hobby, recipient_fifth_hobby,
        recipient_message)
        VALUES ('$rfname', '$rlname', '$rpnum', '$raddress', '$rhobby1', '$rhobby2', '$rhobby3', '$rhobby4', '$rhobby5', '$msg')";

if ($conn ->query($sql) === TRUE) {
    echo "<br>";
    echo "'Elevate Your Cards' Request Information Added Successfully.";
}
else {
    echo "Error: " . $sql . "<br>" . $conn ->error;
}

$conn ->close();

?>