<?php
//Вывести на экран приветствие, если форма
//передана в обработку
if ($_POST['user']) {
	print "Hello,";
	//Вывести на экран значение параметра 'user' из
	//переданной на обработку формы
	print $_POST ['user'];
	print "!";
} else {
	//иначе - вывести на экран саму форму
print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your Name: <input type="text" name="user"/>
</br>
<button type="submit">Say Hello</button>
</form>
_HTML_;
}
//Обязательно с начала строки!!!

print "</br>";
print"The population of US is about: ";
print number_format(320853904);
?>