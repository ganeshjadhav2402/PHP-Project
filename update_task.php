<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Retrieve task details
    $result = $conn->query("SELECT * FROM tasks WHERE id = $id");
    $task = $result->fetch_assoc();
} else {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css">
    <title>Update Task</title>
</head>
<body>
    <h1>Update Task</h1>

    <form action="save_update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
        <label for="task">Task:</label>
        <input type="text" id="task" name="task" value="<?php echo $task['task_name']; ?>" required>
        <button type="submit">Save Update</button>
    </form>

    <a href="index.php" class="back">Back to To-Do List</a>

</body>
</html>
