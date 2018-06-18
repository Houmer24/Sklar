<?php
function imgsteady($url, $alt = 'no-data', $height = '100%', $width = '100%')
{
	$html = "<img src='$url' alt='$alt' height='$height' width='$width'/>";
	return $html;
}
print imgsteady('t1.jpg','finish','50%','50%');
?>

<?php
	function html_img($url, $alt = null, $height = null, $width = null) {
	$html = '<img src="'.$url. '"';
	if (isset($alt)) {
		$html .= 'alt ="'.$alt.'"';
	}
	if (isset($height)) {
		$html .= 'height ="'.$height.'"';
	}
	if (isset($width)) {
		$html .= 'width ="'.$width.'"';
	}
	$html .= '/>';
	return $html;
}
print "<br>";
print html_img('t1.jpg');
?>

<?php
	function html_img2($file) {
if (isset($GLOBALS['special_path'])) {
	$file = $GLOBALS['special_path'].$file;
}
	$html = '<img src="'.$file. '"';
	$html .= '/>';
	return $html;
}
print "<br>";
print html_img('t1.jpg');


print_r($GLOBALS);
?>

<?php
function Colori(int $red,int $green,int $blue,)
{
	$hex = [dechex($red), dechex($green), dechex($blue)];
foreach ($hex as $i => $val) {
	if (strlen($i) == 1) {
	$hex[$i] = "0$val";
}
}
return '#'.implode('',$hex);
}
?>

