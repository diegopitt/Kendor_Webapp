<?php
$dir = ".";

// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
	    if (is_dir($file)) {
		if($file != "." && $file != ".."){
            	echo "$file,";
		}
	    }
        }
        closedir($dh);
    }
}
?>