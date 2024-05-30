<?php
$counterFile = "counter.txt";
$counter = file_get_contents($counterFile);
$counter++;
file_put_contents($counterFile, $counter);
echo $counter;
?>
