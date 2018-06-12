<?php
$price_1=12;
$price_2=13;
if(abs($price_1-$price_2)<0.00001){
print "$price_1 and $price_2 are equal.";
}else{
print "$price_1 and $price_2 are not equal.";
}
?>

<?php
print "</br>";
//Сравнение в лексикографическом порядке
if("x54321">"x5678"){
	print 'The string "x54321" is greater than the string "x5678".';
}else{
	print 'The string "x54321" is not greater than the string "x5678".';
}
?>

<?php
print "</br>";
print strcmp("x54321", "x5678");
print "</br>";
print strcmp("x5678", "x54321");
print "</br>";
print strcmp("x", "X");
print "</br>";
$a = strcmp(1, 12.7);
print $a;
print "</br>";
print (0+"true");
print "</br>";
?>

a -
b +
c +
d -
e -
f -
g +
h -
<div style="float:left;color: blue;">
<?php
print "</br>";print "</br>";print "</br>";
$f = -50;
while ($f<=50) {
	print "$f&nbsp;&nbsp;&nbsp;";
	printf ('%.1f',($f-32)*5/9);
	print "</br>";
	++$f;
}
?>
</div>
<div style="float:left;margin-left: 5%;color: red;">
<?php
print "</br>";print "</br>";print "</br>";
$f = -50;
for ($f=-50;$f<=50;$f++) {
	print "$f&nbsp;&nbsp;&nbsp;";
	printf ('%.1f',($f-32)*5/9);
	print "</br>";
}
?>
</div>
