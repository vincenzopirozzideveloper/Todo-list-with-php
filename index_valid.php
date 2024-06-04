<?php
require_once 'db.php';
if (isset($_POST['addtask'])) {
  $task = $_POST['textfield'];
  $stmt = $dbcon -> prepare("INSERT INTO task_table (task_name) VALUES (?)");
  $stmt->bind_param("s", $task);
  $stmt->execute();
  if ($stmt->affected_rows > 0) {

    $_SESSION['update_success'] = "Task added successfully!";
  } else {
    echo "Error: " . $stmt->error;
  }
  $stmt->close();
}
?>