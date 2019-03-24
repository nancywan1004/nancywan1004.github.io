<?php
include 'connect.php';
$conn = OpenCon();

$user_confirm = (isset($_GET['confirm#']) ? $_GET['confirm#'] : null);

$query = "SELECT confirmNum, pquantity, orderDate, status FROM cakeorder WHERE confirmNum = '{$user_confirm}'";

$result = $conn->query($query);
if ($result->num_rows > 0) {
    echo "<table><tr><th class='border-class'>Your Confirmation Number</th><th class='border-class'>Quantity</th><th class='border-class'>Order Date</th><th class='border-class'>Status</th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td class='border-class'>".$row["confirmNum"]."</td><td class='border-class'>".$row["pquantity"]."</td><td class='border-class'>".$row["orderDate"]."</td><td class='border-class'>".$row["status"]."</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}
CloseCon($conn);
?>