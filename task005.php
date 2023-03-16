<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>005</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="date" placeholder="дата рождения">
    <input type="submit">
</form>

<?php
if (isset($_REQUEST['date'])) {
$date = explode('.', $_REQUEST['date']);
$message = $date;
$now = date("Y");
$dr = mktime(23, 59, 59, $date[1], $date[0]) + 1;
echo $now - $date[2]. " лет";
}
?>


</body>
</html>
