<?php
print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your comments: <input type="text" name="comments"/>
</br>
Your card: <input type="text" name="card"/>
</br>
<button type="submit">Say more</button>
</form>
_HTML_;

print('</br>');
print('</br>');
print strtolower ('Beef, CHICKEN, Pork, duCK');
print('</br>');
print strtoupper ('Beef, CHICKEN, Pork, duCK');
print('</br>');
print ucwords(strtolower('JOHN FRANKENHEIMER'));
print('</br>');
print('</br>');
//print '...';
print substr($_POST['comments'], 0, 10);
print '...';
print('</br>');
print('</br>');
print 'Card: XX';
print substr ($_POST ['card'],-4,4);
print('</br>');
print('</br>');
print 'Card: XX';
print substr ($_POST ['card'],-4);
print('</br>');
print('</br>');

$html = '<span class="{class}">Fried Bean Curd</span>
<span class="{class}">Oil-Soaked Fish</span>';
$my_class = $_POST ['card'];
print str_replace('{class}',$my_class,$html);

?>