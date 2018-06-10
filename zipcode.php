<?php
$zipcode = trim($_POST['zipcode']);
//отрежем пробелы в начале и конце
$zip_length = strlen(trim($_POST['zipcode']));
//померяем длинну
if ($zip_length != 5) {
	print "please enter a zipcode that is 5 characters long.";
}
?>