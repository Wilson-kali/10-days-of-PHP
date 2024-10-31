<?php
include 'config.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Student Records</h1>
    <a href="create.php">Add New Student</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // Use fetch() with PDO
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['course']); ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a> | 
                        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        document.querySelectorAll('a.delete').forEach(function(link) {
            link.addEventListener('click', function(event) {
                if (!confirm('Are you sure you want to delete this record?')) {
                    event.preventDefault(); // Prevent the default action (navigation)
                }
            });
        });
    </script>
</body>
</html>
