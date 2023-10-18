<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insert data";
$port = 3307;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from member";
$result = mysqli_query($conn, $sql);

echo '<form action="process_form.php" method="POST">';
echo '<label for="memberID">Select a Member:</label>';
echo '<select name="memberID">';

while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $fn = $row['firstname'];
    $sn = $row['surname'];
    echo "<option value='$id'>$fn $sn</option>";
}

echo '</select>';
echo '<input type="submit" value="Submit">';
echo '</form>';

mysqli_close($conn); 
?>