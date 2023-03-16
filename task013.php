<?php
$questions = [
    ['год основания МИДиС?', 1992],
    ['номер группы у Якова', 226],
    ['что делать если скучно?', 'кинопоиск']
];

if (!empty($_REQUEST)) {
    $answers = $_REQUEST['answer'];
    $res = [];
    foreach ($questions as $key => $question) {
        if ($question[1] == $answers[$key]) {
            $res[] = ['green', "Ваш ответ: $answers[$key], верно!"];
        } else {
            $res[] = ['red', "Ваш ответ: $answers[$key], не верно! Правильный ответ: $question[1]."];
        }
    }
}
?>
 
<form action="" method="post">
    <?php foreach ($questions as $key => $question): ?>
        <p><?=$question[0];?></p>
        <?php if (!empty($_REQUEST)): ?>
            <p style="color: <?=$res[$key][0];?>"><?=$res[$key][1];?></p>
        <?php else: ?>
            <input type="text" name="answer[]"><br>
        <?php endif;?>
        <hr>
    <?php endforeach;?>
    <?php if (empty($res)): ?>
        <input type="submit">
    <?php endif;?>
</form>