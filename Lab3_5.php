<?php
echo ini_get('safe_mode') ? "Safe mode is on.":"safe mode is off." , "<hr>";

$str = "this ";

$str .= "is ";

$str .= "a ";

$str .= "demo ";

$str .= "sentence.";

echo "$str<hr>";

$s=strtolower(PHP_OS);
$os = $s[0].$s[1].$s[2];
($os == 'win') ? $cmd =`set`:$cmd=`printenv`;

echo"<pre>$cmd </pre><hr>";

($os =='win') ? $cmd = "date /t & time /t" : $cmd ="date";
echo shell_exec($cmd) . "<hr>";

$str= "\$x = 5;
\$x+= 3;
echo \$x;";
eval($str);

?>