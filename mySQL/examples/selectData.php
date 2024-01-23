<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*
The SELECT statement is used to select data from one or more tables:
SELECT column_name(s) FROM table_name

or we can use the * character to select ALL columns from a table:
SELECT * FROM table_name
*/

//The following example selects the id, firstname and lastname columns from the MyGuests table and displays it on the page:
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
/*
The function fetch_assoc() puts all the results into an associative array that we can loop through. 
The while() loop loops through the result set and outputs the data from the id, firstname and lastname columns.
*/
?>
</body>
</html>