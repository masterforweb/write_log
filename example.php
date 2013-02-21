<?php 
	
	require 'write_log.php';

	define('LOGFILE', __DIR__.'/log/example.log');
	
	# write text only
	write_log('test write in log file');
	
	# and send mail
	//write_log('test write in log file and mail', 'ak@argumenti.ru');