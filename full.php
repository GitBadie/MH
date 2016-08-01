<?php
$str = implode(file('p/one.html'));
$str2 = implode(file('p/two.html'));
$src = implode(file('p/src.html'));
echo $str, $str2, $src;