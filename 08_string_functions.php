<?php

$string = 'HelloWorld';

echo $string;


$string2 = '<script>alert(1)</script>';
echo htmlspecialchars($string2);

printf("%s likes to %s", "Brad", "code");
printf('1+1=%f', 1+1);