<?php
$flavors = array ('japanese' => array ('hot' => 'wasabi',
										'salty' => 'soy sause'),
					'chinese' => array ('hot' => 'mustard',
										'salty' => 'prickly ash'));
foreach ($flavors as $culture => $culture_flavors) {
	foreach ($culture_flavors as $flavor => $example) {
		print "A $culture $flavor flavor is $example.<br>\n";
	}
}
print('<br>');

$rooms = array('Одна постель' => array ('01.07' => 'занято',
									'02.07' => 'занято',
									'03.07' => 'свободно',
									'04.07' => 'свободно',
									'05.07' => 'занято'),
			'Две постели' => array ('01.07' => 'занято',
									'02.07' => 'свободно',
									'03.07' => 'свободно',
									'04.07' => 'свободно',
									'05.07' => 'занято'),
			'Две постели и раскладушка' => array('01.07' => 'занято',
									'02.07' => 'занято',
									'03.07' => 'свободно',
									'04.07' => 'свободно',));
foreach ($rooms as $room_type => $beds) {
	foreach ($beds as $date => $free) {
	print "Cвободный или занятый номер ($room_type) есть на дату $date <br>";}
}
print('<br>');

$specials = array(array('Chestnut bun',
					'Walnut bun',
					'Peanut bun'),
				array('Chestnut salad',
					'Walnut salad',
					'Peanut salad'));
for ($i = 0, $num_specials = count($specials); $i<$num_specials; $i++) {
	for ($m = 0, $num_sub = count($specials[$i]); $m<$num_sub; $m++) {
		print "Element [$i][$m] is ".$specials[$i][$m]."<br>"."\n";
	}
}
?>

<?php 
print('<br>');
$cities = array('New-York' => 8175133,
				'Los-Angeles, CA' => 3792621,
				'Chicago, IL' => 2695598,
				'Houston, TX' => 2100263,
				'Filadelfia, PA' => 1526006,
				'Fenix, AZ' => 1445632,
				'San-Antonio, TX' => 1327407,
				'San-Diego, CA' => 1307402,
				'Dallas, TX' => 1197816,
				'San-Jose, CA' => 945942);
print "<table><tr><th>Город, Штат</th><th>Население</th></tr>";
$all = 0;
foreach ($cities as $City => $Pop) {
	print "<tr><td>$City</td><td>$Pop</td></tr>";
	$all+=$Pop;
}
print "<tr><td>Все города</td><td>$all</td></tr>";
print "</table>";

print "<table><tr><th>Город, Штат</th><th>Население</th></tr>";
$all = 0;
asort($cities);
foreach ($cities as $City => $Pop) {
	print "<tr><td>$City</td><td>$Pop</td></tr>";
	$all+=$Pop;
}
print "<tr><td>Все города</td><td>$all</td></tr>";
print "</table>";

print "<table><tr><th>Город, Штат</th><th>Население</th></tr>";
$all = 0;
ksort($cities);
foreach ($cities as $City => $Pop) {
	print "<tr><td>$City</td><td>$Pop</td></tr>";
	$all+=$Pop;
}
print "<tr><td>Все города</td><td>$all</td></tr>";
print "</table>";

$states = array('NY' => 232352356,
				'TX' => 235689562,
				'CA' => 564578895,
				'IL' => 564578451,
				'PA' => 451245563,
				'AZ' => 784589562);

print('<br>');

$cities = array(['New-York','NY', 8175133],
				['Los-Angeles', 'CA', 3792621],
				['Chicago', 'IL', 2695598],
				['Houston', 'TX', 2100263],
				['Filadelfia', 'PA', 1526006],
				['Fenix', 'AZ', 1445632],
				['San-Antonio', 'TX', 1327407],
				['San-Diego', 'CA', 1307402],
				['Dallas', 'TX', 1197816],
				['San-Jose', 'CA', 945942]);
print "<table border><tr><th>Город</th><th>Штат</th><th>Население</th><th>Население Штата</th></tr>";
$total = 0;
$state_totals = array();
	foreach ($cities as $city_info) {
		$total += $city_info[2];
		print "<tr><td>".$city_info[0]."</td><td>".$city_info[1]."</td><td>".$city_info[2]."</td><td></td></tr>";
		if (!array_key_exists($city_info[1], $state_totals)) {
			$state_totals[$city_info[1]] = 0;
		}
		$state_totals[$city_info[1]]+=$city_info[2];
	}
print "<tr><td>Население</td><td>Всего</td><td>$total</td><td></td></tr>";
foreach ($state_totals as $state => $pop) {
print "<tr><td></td><td>$state</td><td></td><td>$pop</td></tr>";
}
print "</table>";

print('<br>');
?>

<?php
$disciples => ['Vasja Vasin' => ["Класс" => '1a', "id" => 894512],
			'Kolja Sedov' => ["Класс" => '3a', "id" => 894412]
];

$products => ['Батоны' => 456, 'Булки' => 25, 'Рогалики' => 45];


$lunches => ['понедельник' => ['закуска'=>56, 'салат'=>45, 'напиток'=>85],
			'вторник' => ['закуска'=>56, 'салат'=>45, 'напиток'=>85]];

$Names =>array("Vasja", "Katja", "Petja");

$Names => ['elders' => ['grandpa'=>'Lesha', 'grandma' => 'Nina']


$Family => ['Names_rel' =>['Me'=>['Kolja' => ['Lesha', 'Nina'],
									'Marina' => []],
							'Toxa'=>['Kolja' => ['Lesha', 'Nina'],
									'Marina' => []]],
?>




