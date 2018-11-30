<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "store";

$conn = mysqli_connect($servername, $username, $password, $db);
// Одна запись mysqli_query
$sql = "INSERT INTO guestbook (username, email, comment)
VALUES ('John', 'john@example.com', 'Hi, It is John Doe');";
if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

// Много записей mysqli_multi_query

$sql = "INSERT INTO guestbook (username, email, comment) VALUES ('John', 'john@example.com', 'Hi, It is John Doe'); INSERT INTO guestbook (username, email, comment) VALUES ('Jaine', 'jaine@example.com', 'Hi, It is Jain Aire');";
if (mysqli_multi_query($conn, $sql)) {
   echo "New records created successfully";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

