<?php

function old_f($n)
{
    if ($n <= 2)
    {
        return $n;
    }
    
    return old_f($n - 2) + old_f($n - 1);
}


function static_f($n)
{
    static $result = [];

    if (isset($result[$n]))
    {
        return $result[$n];
    }

    if ($n <= 2)
    {
        $tmp = $n;
    }
    else
    {
        $tmp = static_f($n - 2) + static_f($n - 1);
    }

    $result[$n] = $tmp;
    return $tmp;
}

//40:165580141 ： 9.07817411
//40:165580141 ： 1.693E-5

$n = 40;

$start_time = microtime(TRUE);
$old_f =  old_f($n);
$end_time   = microtime(TRUE);

echo $n . ':' . $old_f . ' ： ' . round(($end_time - $start_time) , 8); 

echo '<br>';

$start_time = microtime(TRUE);
$static_f =  static_f($n);
$end_time   = microtime(TRUE);

echo $n . ':' . $static_f. ' ： ' . round(($end_time - $start_time) , 8); 
