<?php

function write_log($message, $file = '') {
	
	if (defined('LOGFILE'))
		$file = LOGFILE;

	$value = '['.date('d.m.y\ H:i:s').'] '.$message.chr(13);		

	file_put_contents($file, $value); #saved message
	
}