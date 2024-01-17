<?php


function upload_file($file_field_name, &$ext, $accepted_ext="", $target_filename=""){
	// $ext returns extension of uploaded file

	global $files_dir;		// relative path to dir where to store uploaded file, relative to caller script
	global $upload_msg;		// return message
	
	if (empty($target_filename)){
		//-- use filename of uploaded file
		$filename=$_FILES[$file_field_name]['name'];
		// clean filename
		$filename=str_replace(" ","_", $filename);			// replaces " " with "_"
		$filename=str_replace("(","", $filename);			// relaces ")" with ""
		$filename=str_replace(")","", $filename);			// )
		$filename=str_replace("'","", $filename);			// '
		$filename=str_replace("%","-", $filename);			// %
		$filename=str_replace("?","-", $filename);			// ?
		$filename=str_replace("#","-", $filename);			// #
		$filename=strtolower($filename);					// 
	}
	else {
		$filename=$target_filename;
	}
	
	//-- get extension of uploaded file
	$parts=explode(".", $_FILES[$file_field_name]['name']);
	$ext=array_pop($parts);
	$ext=strtolower($ext);
	
	//echo "EXT: $ext";
	//echo "FILENAME: $filename";
	
	if (empty($accepted_ext)){	// if not passed array of extensions, accept all
		$accepted_ext=array("jpg", "gif", "png", "pdf", "xls", "doc", "swf", "eps");	
	}
	
	
	if ($_FILES[$file_field_name]['size'] > 0 and in_array($ext, $accepted_ext) ) {		// ako smo uploadovali sliku
		
		$filesize=$_FILES[$file_field_name]['size'];
		$basename=$_FILES[$file_field_name]['name'];
		
		//$destinacija=$files_dir.$_FILES[$file_field_name]['name'];
		$destinacija=$files_dir.$filename;

				
		$sufix=1;
		while (file_exists($destinacija)) {				// while there is a file with the same filename
				
			$delovi=explode(".", $filename);
			$delovi[0].="-$sufix";					// add 1 at the end of the filename
			$basename=implode(".", $delovi);		// connect filename parts back
			$destinacija=$files_dir.$basename;
			$sufix++;
					
		};
			
				
		if (!copy($_FILES[$file_field_name]['tmp_name'], $destinacija)){
			//echo "<br>Error while uploading file.";
			$upload_msg="<br>Error while uploading file. ($basename, $filesize bytes)";
			$image_url="";
		}
		else {
			//echo "<br>File uploaded successfully";
			$upload_msg="File uploaded successfully. ($basename, $filesize bytes)";
			$image_url=$destinacija;
		}
			
	}
	else {		// upload failed
		$image_url="";
		$upload_msg="Cannot upload file. Filetype (.$ext) is not supported.";	
	}
		
	return $image_url;
		
}			////////////////// end of function upload_file()

?>