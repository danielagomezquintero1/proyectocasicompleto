 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mybd";
$dbtable = "usuarioss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE $dbtable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
contrasena VARCHAR(255) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table $dbtable created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO $dbtable (firstname, lastname, email, contrasena)
VALUES ('John', 'Doe', 'john@example.com', '". md5('1010') . "');";
$sql .= "INSERT INTO $dbtable (firstname, lastname, email, contrasena)
VALUES ('Mary', 'Moe', 'mary@example.com', '". md5('2020') . "');";
$sql .= "INSERT INTO $dbtable (firstname, lastname, email, contrasena)
VALUES ('Julie', 'Dooley', 'julie@example.com', '". md5('3030') . "')";

if ($conn->multi_query($sql) === TRUE) {
    echo "<br>New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
