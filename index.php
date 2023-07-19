<?php
$length_pass = $_GET['pass'] ?? 0;
$characters = 'abcdefghijklmnopqrstvuwyxzABCDEFGHIJKLMNOPQRSTVUWYXZ0123456789!@#$%^&*';
function random_pass($length_pass, $characters)
{
    return substr(str_shuffle($characters), 0, $length_pass);
};
var_dump(random_pass($length_pass, $characters));
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <form action="#">
        <input type="number" name="pass">
        <button>invia</button>
    </form>

</body>

</html>