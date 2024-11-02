<?php
	//source: https://stackoverflow.com/a/768438
    header('Location: log.htm');
    $fh = fopen('visitors.log', 'a');
    //fwrite($fh, date('d-m-Y H:i:s') . ' - ' . $_SERVER['REMOTE_ADDR'] . ' - ' . $_SERVER['REQUEST_URI'] . ' - ' . $_SERVER['SERVER_NAME'] . ' - ' . $_SERVER['ORIG_PATH_INFO'] . "\n");
	fwrite($fh, date('d-m-Y H:i:s', time() + 6 * 60 * 60) . ' - ' . $_SERVER['REMOTE_ADDR'] . ' - ' . $_SERVER['REQUEST_URI'] . ' - ' . $_SERVER['SERVER_NAME'] . ' - ' . $_SERVER['ORIG_PATH_INFO'] . "\n");
    //fwrite($fh, $_SERVER['REMOTE_ADDR'] . ' ' . date('c') . "\n");
    fclose($fh);
?>

