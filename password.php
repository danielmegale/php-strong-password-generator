<?php
session_start();
$success_pass = $_SESSION['password']
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>la tua password è:<?= $success_pass ?></h1>
</body>

</html>