<?php include "header.php"; ?>
<?php
set_time_limit(3600);
 
function perfect($number) {
    for ($n = 2; $n <= sqrt($number); $n++) {
        if (!($number % $n)) {
            $d += $n;
            if ($n <> $number / $n)
                $d += $number / $n;
        }
    }
    return ++$d == $number;
}
 
for ($n = 1; $n < 10000; $n++)
    if (perfect($n))
        echo $n . '<br>'; 

?>
<?php include "footer.php"; ?>