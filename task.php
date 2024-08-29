<?php
$authkey = getenv("AUTH_KEY");
if (!isset($_REQUEST["task"], $_REQUEST["authkey"])) {
    die("Missing parameters.");
}

$task = basename($_REQUEST["task"]);
$authkeyInput = $_REQUEST["authkey"];

if ($authkeyInput !== $authkey) {
    die("Incorrect auth key.");
}

$taskPath = "tasks/$task.task/TASK";
$logPath = "tasks/$task.task/LOG";

if (!is_file($taskPath)) {
    die("Invalid task.");
}

$escapedTaskPath = escapeshellarg($taskPath);
$escapedLogPath = escapeshellarg($logPath);
exec("nohup $escapedTaskPath > $escapedLogPath &");
?>
