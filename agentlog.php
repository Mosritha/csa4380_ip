<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regno";
$conn = new mysqli($servername, $username, $password, $dbname);
$name = $_POST["name"];
$id = $_POST["id"];
$result = $conn->query("SELECT * FROM agents");
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
if ($row["name"] == "$name" && $row["id"] == "$id") {
echo "User found";
}
else 
{
echo "Invalid Entry";
}
}
} 
else 
{
echo "No record found";
}
?>
