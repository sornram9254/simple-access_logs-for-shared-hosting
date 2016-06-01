<?php
	// insert script to : /wp-content/themes/THEME_NAME/header.php
	// save log to home directory, DO NOT SAVE TO /home/USER/public_html/
	class AccessLogs {
		public function execute($targetFile) {
	        date_default_timezone_set('Asia/Bangkok');
	        $date = date('d/M/Y:H:i:s');
	        $requestType = $_SERVER['REQUEST_METHOD'];
	        $requestVar  = file_get_contents('php://input');
	        $path = dirname($_SERVER["PHP_SELF"]);
	        isset($_SERVER['REMOTE_ADDR'])    ? $ip=$_SERVER['REMOTE_ADDR'] : $ip='-';
	        isset($_SERVER['HTTP_USER_AGENT'])? $ua=$_SERVER['HTTP_USER_AGENT'] : $ua='-';
        	isset($_SERVER['HTTP_REFERER'])   ? $referrer=$_SERVER['HTTP_REFERER'] : $referrer='-';
	        $data = $ip . " - - [" . $date . "] \"" . $requestType . " " . $path;
	        if($requestVar==""){
	            $data .= $requestVar;
	        }else{
	            $data .= "?".$requestVar;
	        }
	        $data .= "\" \"" . $referrer . "\" \"" . $ua . "\"\n";
			file_put_contents(
				$targetFile,
				$data,
	            // LOCK_EX flag to prevent anyone else writing to file at the same time
	            FILE_APPEND | LOCK_EX
			);
		}
	}
	$saveFiles = new AccessLogs;
	//$saveFiles = $saveFiles->execute('/home/u123456789/access_web.log');
	$saveFiles = $saveFiles->execute('access_web.log');
?>
