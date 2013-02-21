<?php

function write_log($message, $mail = '', $file = '') {
	
	if (defined('LOGFILE'))
		$file = LOGFILE;

	$dir = dirname($file);
	
	if (!is_dir($dir))
		if (!mkdir($dir, 0775, True))
			return False;
	
	$value = '['.date('d.m.y\ H:i:s').'] '.$message.chr(13);		

	file_put_contents($file, $value); # saved message

	if ($mail !== '')  # send mail 
		mail($mail, "log ".$mail, $value); 
	
	
}