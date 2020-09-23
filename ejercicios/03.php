<?php

for ($i=1; $i<=10; $i++) {

    if (divisible($i)) {

        echo "<br>El número ".$i." SI es divisble entre 3";

    } 

}



function divisible($num)

{
if($num%3==0){
    return True;
}
   

}

?>