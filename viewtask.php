<html>
<head>
<title>View task</title>
</head>
<body>
<h1>View task</h1>
<?php
$task = basename($_GET["task"]);
$taskDir = "tasks/$task.task";

if (!is_dir($taskDir)) {
    die("Invalid task.");
}
?>
<p><a href="<?php echo htmlspecialchars(
    "$taskDir/LOG",
    ENT_QUOTES,
    "UTF-8"
); ?>">View logfile</a></p>
<p><a href="<?php echo htmlspecialchars(
    "$taskDir/TASK",
    ENT_QUOTES,
    "UTF-8"
); ?>">View code</a></p>
<h2>Artifacts</h2>
<ul>
<?php
$artifactDir = "$taskDir/artifacts";
if (is_dir($artifactDir)) {
    foreach (scandir($artifactDir) as $artifact) {
        if ($artifact !== "." && $artifact !== "..") {
            echo '<li><a href="' .
                htmlspecialchars(
                    "$artifactDir/$artifact",
                    ENT_QUOTES,
                    "UTF-8"
                ) .
                '">' .
                htmlspecialchars($artifact, ENT_QUOTES, "UTF-8") .
                "</a></li>";
        }
    }
} else {
    echo "<li>No artifacts were found.</li>";
}
?>
</ul>
</body>
</html>
