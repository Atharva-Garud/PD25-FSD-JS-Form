<?php
// Database connection details
$host = "localhost"; // Change to your database host
$username = "atharva"; // Change to your database username
$password = "atharva123*"; // Change to your database password
$database = "atharva_test"; // Change to your database name

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check if the database connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize it
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $state = mysqli_real_escape_string($conn, $_POST["state"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $pincode = mysqli_real_escape_string($conn, $_POST["pincode"]);

    // Prepare an SQL INSERT statement to store form data in a database table
    $sql = "INSERT INTO data (name, phone, email, state, city, country, pincode)
            VALUES ('$name', '$phone', '$email', '$state', '$city', '$country', '$pincode')";

    // Execute the SQL statement and check if it was successful
    if ($conn->query($sql) === TRUE) {
        echo "<h2>Form Data Submitted and Saved to Database Successfully:</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Email: $email</p>";
        echo "<p>State: $state</p>";
        echo "<p>City: $city</p>";
        echo "<p>Country: $country</p>";
        echo "<p>Pin Code: $pincode</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If the form was not submitted, redirect back to the form page or display an error message.
    echo "Form submission failed.";
}
?>
