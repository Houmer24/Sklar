<?php
print 2**3;
print '</br>';
print pow(2, 3);
print '</br>';
print '</br>';
?>

<?php
print 'How are you? ';
print 'I\'m fine.';
print '</br>';
print '</br>';
print '</br>';
print '</br>';
?>

<?php

print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Стоимость гамбургера: <input type="text" name="hamb"/> Количество <input type="text" name="count"/> </br>
Стоимость молочно-шоколадного коктейля: <input type="text" name="chock"/></br>
Стоимость колы: <input type="text" name="cola"/></br>
Налог НДС: <input type="text" name="tax"/></br>
Чаевые: <input type="text" name="tips"/></br>
<button type="submit">Рассчитать?</button>
</form>
_HTML_;


$total_cost = 0;
$hamburger = $_POST['hamb'];//4.95
$count = $_POST['count'];//2
$milky_chock = $_POST['chock'];//1.95
$cola = $_POST['cola'];//0.85
$tax = $_POST['tax'];//Процент от заказа 0.075
$tips = $_POST['tips'];//Процент от заказа 0.16
$food = 2*$hamburger + $milky_chock + $cola;
$all_fee = $food*($tax+$tips);
$total_cost = $food+$all_fee;

print "Стоимость гамбургера: "."$$hamburger "."количество: $count"."шт";
print '</br>';
print "Стоимость молочно-шоколадного коктейля: "."$$milky_chock "."количество: 1"."шт";
print '</br>';
print "Стоимость колы: "."$$cola "."количество: 1"."шт";
print '</br>';
print '</br>';print '</br>';



$hamburger = 4.95;
$milky_chock = 1.95;
$cola = 0.85;

$tip_rate = 0.16;
$tax_rate = 0.075;

$food = (2*$hamburger)+$milky_chock+$cola;
$tip = $food*$tip_rate;
$tax = $food*$tax_rate;

$total = $food + $tip + $tax;

?>
<div style="text-align: right;width: 25%;">
<?php
printf("%d %-8s at \$%.2f each: \$%5.2f </br> \n", 2, 'hamburger', $hamburger, 2*$hamburger);
printf("%d %-9s at \$%.2f each: \$%5.2f </br> \n", 1, 'shake', $milky_chock, $milky_chock);
printf("%d %-9s at \$%.2f each: \$%5.2f </br> \n", 1, 'cola', $cola, $cola);
printf("%25s: \$%5.2f </br>\n",'Food total',$food);
printf("%25s: \$%5.2f </br>\n",'Food and Tax total',$food+$tax);

/*print '</br>';
print '</br>';
print "Налоги и чаевые: "."$$all_fee";
print '</br>';
print "Общая стоимость трапезы $$total_cost";*/

?>
</div>

<?php
$first_name = "Volodja";
$last_name = "Putin";

print $first_name." ".$last_name;
print '</br>';
$l_fn = strlen($first_name);
$l_ln = strlen($last_name);
print $l_fn+1+$l_ln;
?>


<?php 
print '</br>';
$i =1;
print "$i ";
++$i;
print "$i ";
++$i;
print "$i ";
++$i;
print "$i ";
++$i;
print "$i ";
print '</br>';
$i=2;
print "$i \n";
$i*=2;
print "$i ";
$i*=2;
print "$i ";
$i*=2;
print "$i ";
$i*=2;
print "$i ";
?>