<?php
$bool = true;
$str = '1';
$flt = 1.23;
$int = 1;
​
if ($bool == $int) {
    //       if ($bool === $int) {          } else { };
    $bool_int = $bool === $int ? 'Identiski' : 'Lygus';
} else {
    $bool_int = 'Nelygus';
}
​
if ($str == $bool) {
    $str_bool = $str === $bool ? 'Identiski' : 'Lygus';
} else {
    $str_bool = 'Nelygus';
}
​
if ($flt == $str) {
    $flt_str = $flt === $str ? 'Identiski' : 'Lygus';
} else {
    $flt_str = 'Nelygus';
}
​
$li_1 = "Bool (true) ir Integer (1): $bool_int";
$li_2 = "String (1) ir Boolean (1): $str_bool";
$li_3 = "Float (1.23) ir string(1): $flt_str";
?>
<html lang="en">
    <body> 
        <ul>
            <li><?php print $li_1; ?></li>
            <li><?php print $li_2; ?></li>
            <li><?php print $li_3; ?></li>
        </ul>
    </body>
</html>