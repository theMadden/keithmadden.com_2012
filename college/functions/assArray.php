<?php 

function associate($a, $b, $c, $d, $e, $f) {

$array=array($a=>$_POST[$a], $b=>$_POST[$b], $c=>$_POST[$c], $d=>$_POST[$d], $e=>$_POST[$e], $f=>$_POST[$f]);
return $array;

}
?>