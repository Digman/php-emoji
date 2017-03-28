<?php
	include('../lib/emoji.php');

	function format_bytes($bytes, $prefix = '\\x'){
		$out = '';
		for ($i=0; $i<strlen($bytes); $i++){
			$out .= $prefix.sprintf('%02X', ord(substr($bytes, $i, 1)));
		}
		$out = strtolower($out);
		return $out;
	}

	$data = array();
	$GLOBALS['emoji_maps']['names'] = array_reverse($GLOBALS['emoji_maps']['names']);
	foreach ($GLOBALS['emoji_maps']['names'] as $unified => $name){
		$key = format_bytes($unified);
		$val = format_bytes($unified, '');
		$data[$key] = $val;
	}
var_export($data);