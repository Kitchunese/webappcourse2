<form action="" method="POST">
    <input id="date" type="number" name="data1" min="1" max="31" placeholder="День">
    <input id="date" type="number" name="data2" min="1" max="12" placeholder="Месяц">
    <input type="submit" value="определить">
</form>

<?php
if (isset($_POST['data1']) && isset($_POST['data2'])) {
    $day = $_POST['data1'];
    $month = $_POST['data2'];
    if (($month == 3 && $day >= 21 && $day <= 31) || ($month == 4 && $day > 0 && $day <= 20)){
        echo("Овен");
    }

    else if (($month == 4 && $day >= 21 && $day <= 30) || ($month == 5 && $day > 0 && $day <= 20)){
        echo("Телец"); 
    }
          
    else if (($month == 5 && $day >= 21 && $day <= 31) || ($month == 6 && $day > 0 && $day <= 20)){
        echo("Близнецы");   
    }
        
    else if (($month == 6 && $day >= 21 && $day <= 30) || ($month == 7 && $day > 0 && $day <= 22)){
        echo("Рак");  
    }
          
    else if (($month == 7 && $day >= 23 && $day <= 31) || ($month == 8 && $day > 0 && $day <= 22)){
        echo("Лев");   
    }
         
    else if (($month == 8 && $day >= 23 && $day <= 31) || ($month == 9 && $day > 0 && $day <= 22)){
        echo("Дева");     
    }
         
    else if (($month == 9 && $day >= 23 && $day <= 30) || ($month == 10 && $day > 0 && $day <= 22)){
        echo("Весы");  
    }
          
    else if (($month == 10 && $day >= 23 && $day <= 31) || ($month == 11 && $day > 0 && $day <= 21)){
        echo("Скорпион");  
    }
          
    else if (($month == 11 && $day >= 22 && $day <= 30) || ($month == 12 && $day > 0 && $day <= 21)){
        echo("Стрелец"); 
    }
           
    else if (($month == 12 && $day >= 22 && $day <= 31) || ($month == 1 && $day > 0 && $day <= 19)){
        echo("Козерог");  
    }
          
    else if (($month == 1 && $day >= 20 && $day <= 31) || ($month == 2 && $day > 0 && $day <= 18)){
        echo("Водолей");  
    }
         
    else if (($month == 2 && $day >= 19 && $day <= 31) || ($month == 3 && $day > 0 && $day <= 20)){
        echo("Рыбы");
    }
}
?>