<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Add this CSS to your file */
        .upda {
            padding: 8px 20px;
            color: #fff;
            border: none;
            background: #8ee4af;
            border-radius: 7px;
            cursor: pointer;
        }

        .dele {
            padding: 8px 20px;
            color: #fff;
            cursor: pointer;
            background: #379683;
            border-radius: 7px;
            cursor: pointer;
        }

        .upda:hover {
            text-decoration: none;
            background: #379683;
        }

        .dele:hover {
            text-decoration: none;
            background: #8ee4af;
        }
    </style>
</head>

<body>
    <?php
    $result = $conn->query("SELECT * FROM tasks");

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['task_name']} - {$row['created_at']} 
              (<a href='update_task.php?id={$row['id']}' class='upda'>Update</a> | 
               <a href='delete_task.php?id={$row['id']}' class='dele'>Delete</a>)</li>";
        }
        echo "</ul>";
    } else {
        echo "No tasks found.";
    }
    ?>
</body>

</html>