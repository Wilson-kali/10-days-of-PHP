<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    // Prepare the SQL statement
    $sql = "INSERT INTO students (name, email, course) VALUES (:name, :email, :course)";
    
    try {
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':course', $course);

        // Execute the statement
        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        }

        // echo "New Record has been Inserted successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add New Student</h1>
    <form action="create.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" name="name" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>
        <label for="course">Course:</label><br>
        <input type="text" name="course" required><br><br>
        <label for="file">Select a file to upload:</label><br>
        <input type="file" name="file" id="" accept=".pdf,.odt,.doc,.jpeg,.png,.jpg"required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
