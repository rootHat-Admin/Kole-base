<?php 
$servername = "localhost";
$username = "root";
$passwoed = "";
$dbname = "products_db";

$conn =  mysqli_connect($servername, $username, $passwoed, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products WHERE price > 1000";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Product Name</th><th>Price</th><th>Category</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['product_name'] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "<td>" . $row["category"] . "</td>";
        echo "</tr>";
    } 
    echo "</table>";
} else {
    echo "Продукты не найдены";
}

$conn->close();

?>

