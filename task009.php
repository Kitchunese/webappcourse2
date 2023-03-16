<form action="" method="POST">
    <textarea name="symb" id="" ></textarea>
    <input type="submit" value="number"><br>
</form>

<?php
if (isset($_POST['symb'])) {
    $symb = $_POST['symb'];
    $symbol = strlen($symb);
    $words = count(explode(' ', $symb));
    $space = count(explode(' ', $symb)) - 1;
    echo 'Символов: ' .$symbol. '<br>'. 'Слов: ' .$words. '<br>'. 'Пробелов: '.$space;
}
?>