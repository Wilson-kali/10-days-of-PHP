<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Use prepared statement for DELETE
    $stmt = $conn->prepare("DELETE FROM students WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Execute the prepared statement
    if ($stmt->execute()) {
        header("Location: index.php");
        exit; // Ensure no further code is executed after redirection
    } else {
        echo "Error deleting record: " . $stmt->errorInfo()[2]; // Display error message
    }
} else {
    echo "No ID provided for deletion.";
}
?>
