<?php 
function getRectangularVolume($vertical, $horizontal, $height ) {
  $area = $vertical * $horizontal * $height ;
  echo $area;
  echo "<br>";
}

getRectangularVolume(5,10,8);
