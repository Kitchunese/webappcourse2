<?php
mb_internal_encoding("UTF-8");
if (isset($_REQUEST['text'])) {
    $translit = [
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
        'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
        'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
        'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch',
        'ш' => 'sh', 'щ' => 'shch', 'ъ' => 'НЕИЗВЕСТНЫЙ СИМВОЛ', 'ы' => 'y', 'ь' => '`',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya', ' ' => ' '
    ];
    $str = mb_strtolower($_REQUEST['text']);
    if ($_REQUEST['translit'] == 1) {
        foreach ($translit as $key => $item) {
            $str = str_replace($key, $item, $str);
        }
    }
    if ($_REQUEST['translit'] == 2) {
        foreach ($translit as $key => $item) {
            $str = str_replace($item, $key, $str);
        }
    }
    echo $str;
}
?>
<form action="" method="get">
    <input type="radio" name="translit" value="1" checked placeholder=""> с русского <br>
    <input type="radio" name="translit" value="2" placeholder=""> на русский <br>
    <input type="text" name="text" placeholder=""> <br>
    <input type="submit">
</form>