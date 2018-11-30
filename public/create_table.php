<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "store";

$conn = mysqli_connect($servername, $username, $password, $db);

$sql = "CREATE TABLE guestbook (
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(25) NOT NULL,
    email varchar(25) NOT NULL,
    comment text NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);";

if (mysqli_query($conn, $sql)) {
    echo "Table guestbook created successfully\n\n";

} else {
    printf("Error creating table: %s\n", mysqli_error($conn));
}

mysqli_close($conn);
