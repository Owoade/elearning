<?php 
$errors=array();
$open_error_file=fopen('json/errors.json','w');
fwrite($open_error_file,json_encode(array('errors'=>$errors),JSON_PRETTY_PRINT)) ;
fclose($open_error_file);
?>