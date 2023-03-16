<form action="" method="POST">
    <textarea name="symb" id=""></textarea>
    <input type="submit" value="Next"><br>
</form>

<?php
if (isset($_POST['symb'])) {
    $symb = $_POST['symb'];
    $str = count(mb_str_split(str_replace(' ', '', $symb)));
    $valuesCount = array_count_values(mb_str_split(str_replace(' ', '', $symb)));
    foreach ($valuesCount as $key => $item) {
        echo $key.' - '.round(100 / $str * $item, 2).'%'.'<br>';
    }
}
?>