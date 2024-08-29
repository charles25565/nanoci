<html>
<head>
<title>NanoCI</title>
</head>
<body>
<h1>NanoCI</h1>
<p>Task list. Click to view logs, artifacts, and the task code.</p>
<ul>
<?php foreach (glob("tasks/*.task") as $task) {
    $taskName = basename($task, ".task");
    $safeTaskName = htmlspecialchars($taskName, ENT_QUOTES, "UTF-8");
    echo "<li>";
    echo '<a href="viewtask.php?task=' .
        urlencode($taskName) .
        '">' .
        htmlspecialchars($safeTaskName, ENT_QUOTES, "UTF-8") .
        "</a>";
    echo "</li>";
} ?>
</ul>
</body>
</html>
