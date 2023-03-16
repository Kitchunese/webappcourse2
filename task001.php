<?php
echo "до нового года: " . floor((strtotime('01.01.'.date('Y')+1) - time()) /60 /60 /24) . " дней";