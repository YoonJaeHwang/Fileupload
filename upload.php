<?php
$uploaddir = 'C:\APM_Setup\htdocs\\';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$filename = $_FILES['userfile']['name'];

echo $filename . ' uploading now ...<br>';

$ext = explode(".", strtolower($filename));
$cnt = count($ext)-1;
$str = 'shell_exec, system';

//echo $ext[$cnt];

if(in_array($_FILES['userfile']['type'],array('image/jpeg','image/pjpeg','image/png','image/gif')) and in_array($ext[$cnt], array('jpg', 'png'))){
		if (@ereg($ext[$cnt-1], "php%00")) {

			// 파일 읽기
			$fp = fopen($_FILES["userfile"]["tmp_name"],"r");
			$fr = fread($fp,99999);
			//echo $fr;
			$result = strpos($fr, 'shell_exec(') | strpos($fr, 'system(');
			//echo $result ;
			if ($result) {
	    		echo "webshell is uploaded<br>";
					echo '<form action="result.php">
									<input type="text" name="password">
									<input type="submit">
								</form>';
	  		} else {
	   			echo "This is not webshell<br>";
	   		}
	  	}
	  	else {
	  		echo "The image is uploaded<br>";
	  	}

}
else {
	echo "this is not a images<br>";
}
?>
