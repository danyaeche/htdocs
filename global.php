<?php
    $num = 20;
    
    function demo() {
    	global $num;
    	echo "Value of num inside the function $num<br>";
    
    }
    
demo(); //run dunction
echo "Value of num outside the function $num:";
?>