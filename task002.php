<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>002</title>
</head>
<body>

<form action="" method="get">
    <input type="text" name="year" placeholder="введите год">
    <input type="submit">
</form>

<?php
if (isset($_REQUEST['year'])) {
    $year = $_REQUEST['year'];
    if (($year % 4 == 0 and $year % 100 != 0) or $year % 400 == 0) {
        echo $year . ' год високосный';
    } else {
        echo $year . ' год невисокосный';
    }
}
?>

</body>
</html>
 