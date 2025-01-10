<?php
// Include the database connection file
include 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $emis_number = $conn->real_escape_string($_POST['emis_number']);
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $age = (int)$_POST['age'];
    $date_of_birth = $conn->real_escape_string($_POST['date_of_birth']);
    $class = $conn->real_escape_string($_POST['class']);
    $sex = $conn->real_escape_string($_POST['sex']);
    $parent_guardian_name = $conn->real_escape_string($_POST['parent_guardian_name']);
    $parents_contact = $conn->real_escape_string($_POST['parents_contact']);

    // Prepare the SQL query to insert into the "students" table
    $sql = "INSERT INTO students (emis_number, first_name, last_name, age, date_of_birth, class, sex, parent_guardian_name, parents_contact) 
            VALUES ('$emis_number', '$first_name', '$last_name', $age, '$date_of_birth', '$class', '$sex', '$parent_guardian_name', '$parents_contact')";

    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        // Display a JavaScript popup and redirect to index.php
        echo "<script>
                alert('Application submitted successfully!');
                window.location.href = 'index.php';
              </script>";
    } else {
        // Display an error message
        echo "<script>
                alert('Error: " . $conn->error . "');
                window.location.href = 'ApplyNow.php';
              </script>";
    }

    // Close the database connection
    $conn->close();
}
?>
