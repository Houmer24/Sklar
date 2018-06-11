<?php
if (strlen(trim($_POST['zipcode'])) != 5) {
	print "please enter a zipcode that is 5 characters long.";
}

if (strcasecmp($_POST['mail'], 'vasja@gmail.com')==0) {
	print "Hello Vasja";
}

$price = -5; $tax = 0.075; $st = 'test';
printf('The dish costs $%-0.2f'."$st", $price*(1+$tax));
print('</br>');
print('</br>');
printf("%15s",$st);
print('</br>');
print('</br>');
$zip = '6520';
$month = 2;
$day = 6;
$year = 2007;
printf("ZIP is %05d and the date is %02d/%02d/%d", $zip,$month,$day,$year);
print('</br>');
print('</br>');
$min = -40;
$max = 40;
printf ("The computer can operate between %-d and %+d degrees Celsius.)))", $min, $year);


?>