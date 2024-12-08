<?php
function area($length,$width){
    return $length * $width;
}
$length = 5; 
$width = 5; 

$area=area($length,$width);
echo "The area of rectangle is $area.";
?>
