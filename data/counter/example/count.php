<?php

	if (file_exists('counter.txt')) 
	{
		$fil = fopen('counter.txt', r);
		$dat = fread($fil, filesize('counter.txt')); 
		echo $dat+1;
		fclose($fil);
		$fil = fopen('counter.txt', w);
		fwrite($fil, $dat+1);
	}

	else
	{
		$fil = fopen('counter.txt', w);
		fwrite($fil, 1);
		echo '1';
		fclose($fil);
	}

?>
