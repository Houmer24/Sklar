<?php
	function html_img2($file) {
if (isset($GLOBALS['special_path'])) {
	$file = $GLOBALS['special_path'].$file;
}
	$html = '<img src="'.$file. '"';
	$html .= '/>';
	return $html;
}
print_r($GLOBALS);
?>