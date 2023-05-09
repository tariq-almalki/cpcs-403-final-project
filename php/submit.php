<?php
$servername = "containers-us-west-12.railway.app";
$username = "root";
$password = "MVORa51Raa4ig5ibfhNM";
$port = '7747';
$dbname = 'feedback';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select database
$conn->select_db($dbname);

// Create table
// $sql = "CREATE TABLE feedback (
// 	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// 	first_name VARCHAR(30) NOT NULL,
// 	last_name VARCHAR(30) NOT NULL,
//  username VARCHAR(30) NOT NULL,
// 	email VARCHAR(50) NOT NULL,
//  profession VARCHAR(30) NOT NULL,
//  address VARCHAR(30) NOT NULL,
//  postal_code VARCHAR(30) NOT NULL,
// 	gender VARCHAR(10) NOT NULL,
// 	hobbies VARCHAR(50) NOT NULL,
// 	city VARCHAR(30) NOT NULL,
// 	feedback TEXT NOT NULL,
// )";

// Get form data
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$hobbies = $_POST['hobbies'];
$city = $_POST['city'];
$feedback = $_POST['feedback'];

// Validate email
$sql = "SELECT * FROM feedback WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $message = "Email already exists";
} else {
    // Insert data into database
    $sql = "INSERT INTO feedback (first_name, last_name, email, gender, hobbies, city, feedback)
	VALUES ('$firstName', '$lastName', '$email', '$gender', '$hobbies', '$city', '$feedback')";

    try {

        if ($conn->query($sql) === TRUE) {
            $message =  "Feedback submitted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } catch (Exception $e) {
        echo "Exception: " . $e->getMessage();
    }
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2; http://localhost:3000/pages/feedback.php">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'Rusty Forest';
            src: url('../fonts/Rusty Forest.otf') format('opentype');
        }

        body {
            background-color: antiquewhite;
            color: antiquewhite;
            overflow: hidden;
        }

        .redirection-div {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
            font-family: 'Rusty Forest';
            font-size: 4em;
            color: black;
        }
    </style>
</head>


<body>

    <div class="redirection-div">
        <?php echo "$message" ?>
    </div>

</body>

</html>