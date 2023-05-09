<?php
function includeFileWithVariables($fileName, $variables)
{
    extract($variables);
    include($fileName);
}
$servername = "containers-us-west-12.railway.app";
$username = "root";
$password = "MVORa51Raa4ig5ibfhNM";
$port = "7747";
$dbname = "railway";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database
$sql = "SELECT users.name, orders.product, orders.price FROM orders JOIN users ON orders.user_id = users.id";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../global/style.css">
    <link rel="stylesheet" href="../global/table.css">
    <script src="https://kit.fontawesome.com/677c0f068b.js" crossorigin="anonymous"></script>
    <title>CPCS-403 Final Project</title>
</head>

<body>

    <div class="index--1_container">

        <?php includeFileWithVariables('../includes/header.php', array()) ?>

        <div class="index--2_container">

            <div class="index--1_content">

                <div class="database-container">
                    <div class="database-text">Database</div>
                    <table class="table-selector">
                        <caption class="table-caption">users' orders</caption>
                        <tr>
                            <th>User Name</th>
                            <th>Product</th>
                            <th>Price</th>
                        </tr>
                        <?php
                        // Display the results
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>" . $row["name"] . "</td><td>" . $row["product"] . "</td><td>" . $row["price"] . "</td></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No orders found</td></tr>";
                        }
                        ?>
                    </table>
                </div>

                <div class="index--3_div">
                    <?php includeFileWithVariables('../includes/links.php', array()) ?>
                    <?php includeFileWithVariables('../includes/footer.php', array()) ?>
                </div>

            </div>

        </div>

    </div>

</body>

</html>




<!DOCTYPE html>
<html>

<head>
    <title>Orders Report</title>
</head>

<body>

</body>

</html>