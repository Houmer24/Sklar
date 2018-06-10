<?php
// использовать базу данных SQLite из файла 'dinner.db'
$db = new PDO ('sqlite:dinner.db');
// определить какие блюда имеются
$meals = array('breakfast','lunch','dinner');
//проверить, содержит ли параметр "meal" переданной
// на обработку формы одно из строковых значений
// "breakfast", "lunch", "dinner"
if (in_array($_POST['meal'], $meals)) {
	//Если данный параметр содержит указанное значение,
	//получить все блюда для указанной трапезы
	$stmt = $db->prepare ('SELECT dish, price FROM meals
			WHERE meal LIKE ?');
	$stmt->execute(array($_POST ['meal']));
	$rows = $stmt->fetchAll();
	//Если блюда в базе данных не обнаружены сообщить об этом
}