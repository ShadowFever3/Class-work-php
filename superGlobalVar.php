<?php
//Super Global
$x=75;
$y=25;
function superglobal (){
$GLOBALS['z'] = $GLOBALS['x']+ $GLOBALS ['y'];
}
superglobal();
echo $z;
echo "<br>";
echo "<br>";
?>