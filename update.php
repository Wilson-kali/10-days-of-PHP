<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Use prepared statement for SELECT
    $stmt = $conn->prepare("SELECT * FROM students WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if student was found
    if (!$row) {
        echo "No student found with that ID.";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    // Use prepared statement for UPDATE
    $stmt = $conn->prepare("UPDATE students SET name = :name, email = :email, course = :course WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':course', $course);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $stmt->errorInfo()[2]; // Display error message
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form method="POST">
        <label for="name">Name:</label><br>
        <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required><br><br>
        <label for="course">Course:</label><br>
        <input type="text" name="course" value="<?php echo htmlspecialchars($row['course']); ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
