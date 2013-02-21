<?php

function write_log($message, $mail = '', $file = '') {
	
	if ($file == '' and defined('LOGFILE'))
		$file = LOGFILE;

	$dir = dirname($file);
	
	if (!is_dir($dir))
		if (!mkdir($dir, 0775, True))
			return False;
	
	$date_str = '['.date('d.m.y\ H:i:s').']';
	$value = $date_str.' '.$message.chr(13);		

	if ($mail !== '')  # send mail 
		mail($mail, "log ".$date_str, $value);

	return file_put_contents($file, $value, FILE_APPEND); # saved message

}