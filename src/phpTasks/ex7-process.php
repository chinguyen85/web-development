<?php
// Connect to the database
    include 'ex7-db.php';

// Check if the form is submitted with data
if(isset($_POST['submit'])){
    // Get the submitted form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    // Insert data into the students table
    $sql = "INSERT INTO students (first_name, last_name, city, group_id) VALUES ('$fname', '$lname', '$city', '$groupid')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
