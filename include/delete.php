<?php
require_once 'db.php'; // Include your database connection file
session_start(); // Start session if not already started

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM studentappointment WHERE MatricNo = ?"; // Assuming MatricNo is your primary key
    
    // Prepare statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id); // Assuming MatricNo is of string type
    
    if ($stmt->execute()) {
        // Redirect back to the page where the delete link was clicked
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    // Close statement
    $stmt->close();
}

?>
