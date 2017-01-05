<?php include "header.php"; ?>
<?php


define("N",1000);
define("SQRT_N",floor(sqrt(N)));


$S = str_repeat("\1", N+1);
for ($i=2; $i<=SQRT_N; $i++) 
 if ($S[$i]==="\1") 
  for ($j=$i*$i; $j<=N; $j+=$i) $S[$j]="\0";


for ($i=2; $i<N; $i++) if ($S[$i]==="\1") echo " ".$i ;
?>
<?php include "footer.php"; ?>