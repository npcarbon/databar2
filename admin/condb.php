
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "databar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// ใส่โค๊ดด้านล่างนี้เพื่อทำให้ Query ข้อมูลออกมาเป็นภาษาไทย
mysqli_query("SET character_set_results=utf8");
mysqli_query("SET character_set_client='utf8'");
mysqli_query("SET character_set_connection='utf8'");
mysqli_query("collation_connection = utf8_unicode_ci");
mysqli_query("collation_database = utf8_unicode_ci");
mysqli_query("collation_server = utf8_unicode_ci");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 





