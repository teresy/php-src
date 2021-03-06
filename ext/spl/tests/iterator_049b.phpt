--TEST--
SPL: ArrayIterator with NULL key
--FILE--
<?php

$ar = new ArrayIterator(array(
	NULL=>1,
	"\0"=>2,
	"\0\0"=>3,
	"\0\0\0"=>4,
	"\0*"=>5,
	"\0*\0"=>6,
	));
@var_dump($ar);
var_dump($ar->getArrayCopy());

?>
===DONE===
<?php exit(0); ?>
--EXPECTF--
object(ArrayIterator)#%d (1) {
  ["storage":"ArrayIterator":private]=>
  array(6) {
    [""]=>
    int(1)
    [" "]=>
    int(2)
    ["  "]=>
    int(3)
    ["   "]=>
    int(4)
    [" *"]=>
    int(5)
    [" * "]=>
    int(6)
  }
}
array(6) {
  [""]=>
  int(1)
  [" "]=>
  int(2)
  ["  "]=>
  int(3)
  ["   "]=>
  int(4)
  [" *"]=>
  int(5)
  [" * "]=>
  int(6)
}
===DONE===
