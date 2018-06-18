
<!--класс Entree

Данные: Переменные. - наименование блюда (грибы под маринадом - грибы маринад)
Действия над этими данными:  функции - как готовить, как подавать. 

Данные Переменные - наименование баб - катя ватя света - свойство
Действия над ними - дарить цветы, слушать, ебать - метод


если ты ухаживаешь за тремя бабами: то каждой экзепляр  кто -свойства, как слушать как ебать -методы
создание нового экземпляра - получение экземпляра обьекта

спец функция -автоматически выполняиется при получении экзепляра обьекта 

короче нихрена не понятно

погнали-->

<?php

class Entree {
	public $name;
	public $ingredients = array ();
	public function hasIngredient($ingredient) {
		return in_array($ingredient, $this->ingredients);
	}
	public static function getSizes() {
		return array('small','medium','large');
	}
}

$soup = new Entree;
$soup ->name = 'Chicken soup';
$soup ->ingredients = array('chicken', 'water');

$sandwich = new Entree;
$sandwich->name ='Chicken sandwich';
$sandwich->ingredients = array('chicken','bread');

foreach (['chicken','lemon','bread','water'] as $ing) {
	if ($soup->hasIngredient($ing)) {
		print "Soup contains $ing.\n";
	}
	if ($soup->hasIngredient($ing)) {
		print "Sandwich contains $ing.\n";
	}
}

//Статический метод выполняется без получения экзепляров класса(всякое с 90 строки)
$sizes = Entree::getSizes();

class Entreee {
	public $name;
	public $ingredients = array();

	public function __construct ($name, $ingredients) {
	$this->name = $name;
	$this->ingredients = $ingredients;
}
	public function hasIngredient ($ingredient) {
	return in_array($ingredient, $this->ingredients);
}
}

$soup = new Entreee('Chicken Soup', array('chiken', 'water' ));
$sandwich = new Entreee('Chicken Sandwich', array ('chiken','bread'));

print "<br>";
print_r ($soup);

/*
class Entreey {
	public $name;
	public $ingredients = array();

	public function __construct ($name, $ingredients) {
		if (! in_array($ingredients)){
			throw new Exception ('$ingredients must be in array');
		}
	$this->name = $name;
	$this->ingredients = $ingredients;
}
	public function hasIngredient ($ingredient) {
	return in_array($ingredient, $this->ingredients);
}
}

/*$drink = new Entreey ('Glass of Milk', 'milk');
if ($drink->hasIngredient('milk')){
	print "Yummy!";
}*/
/*
class ComboMeal extends Entree {
	public function __construct($name, $entrees){
	parent::__construct($name, $entrees);
	foreach ($entrees as $entree) {
		if (! $entree instanceof Entree) {
			throw new Exception(
				'Elements of $entrees must be Entree objects');
		}

	}
	}

	public function hasIngredient($ingredient) {
		foreach ($this->ingredients as $entree) {
			if ($entree->hasIngredient($ingredient)) {
				return true;
			}
		}
		return false;
	}
}


$soup = new Entree('Chiken Soup', array('chiken','water'));
$sandwich = new Entree ('chiken Sandwich', array('chiken','bread'));

$combo = new Combomeal ('Soup + Sandwich', array($soup, $sandwich));

foreach (['chiken','water','pickles'] as $ing){
	if ($combo->hasIngredient($ing)) {
		print "Something in the combo contains $ing.\n";
	}
}
*/
?>

<?php
namespace Meals;
class Ingredient { // обьект с классом ингередиент
	public $name;//имя ингредиента
	public $price; //стоимость ингередиента
	public function __construct ($name, $price) {//конструктор экземпляра объекта этого класса, позволяющий сразу задать имя и стоимость
	$this->name = $name;//имя экземпляра
	$this->price = $price;//стоимость экземпляра
	}
	public function getName() {
		return $this->name;//функция (метод) доступа к имени из кода за пределами класса
	}
	public function getPrice() {
		return $this->price;//функция (метод) доступа к цене из кода за пределами класса
	}
	public function changePrice($np){
		$this ->price = $np;
	}
}
print "<br>";
$spice = new Ingredient('Приправа','123');
print $spice->getPrice();
print "<br>";
print "трали вали ".$spice->getName()." трали вали";
$spice->changePrice(321);
print "<br>";
print $spice->getPrice();
?>

<?php

class Entreey {
	public $name;
	public $ingredients = array();

	public function __construct ($name, $ingredients) {
		if (! in_array($ingredients)){
			throw new Exception ('$ingredients must be in array');
		}
	$this->name = $name;
	$this->ingredients = $ingredients;
}
	public function hasIngredient ($ingredient) {
	return in_array($ingredient, $this->ingredients);
}
}

class PricedEntree extends Entreey {
	public function __construct($name, $ingredients) {
		parent::__construct($name, $ingredients);
		foreach ($this->ingredients as $ingredient) {
			if (!$ingredient instanceof \Meals\Ingredient) {
				throw new Exception("Elements of $ingredients must be Ingredient objects");
				
			}
		}
	}
	public function getPrice () {
		$price = 0;
		foreach ($this->ingredients as $ingredient) {
			$price += $ingredient-> getPrice();
		}
		return $price;
	}
}

?>