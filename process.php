<?php
include 'db.php';


$sql = "SELECT * FROM users WHERE username = '" . $_GET['username'] . "' AND password = '" . $_GET['password'] . "'";


echo "<p>SQL ที่ใช้: <code>" . htmlspecialchars($sql) . "</code></p>";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {

    echo "<h3 style='color:green;'>Login Success!</h3>";
    
    
} else {
    echo "<h3 style='color:red;'>Login Fail!</h3>";

}
$conn->close();
?>
