<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*The DELETE statement is used to delete records from a table:
DELETE FROM table_name
WHERE some_column = some_value

Notice the WHERE clause in the DELETE syntax: 
The WHERE clause specifies which record or records that should be deleted. 
If you omit the WHERE clause, all records will be deleted!

The following examples delete the record with id=3 in the "MyGuests" table:
*/
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

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

/*
The UPDATE statement is used to update existing records in a table:
UPDATE table_name
SET column1=value, column2=value2,...
WHERE some_column=some_value

Notice the WHERE clause in the UPDATE syntax: 
The WHERE clause specifies which record or records that should be updated. 
If you omit the WHERE clause, all records will be updated!

The following examples update the record with id=2 in the "MyGuests" table:
*/
$sql_x = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
?>
</body>
</html>