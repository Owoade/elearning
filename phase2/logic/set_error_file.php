<?php 
$errors=array();
if(isset($_GET['error'])){
array_push($errors,$_GET['error']);
$open_error_file=fopen('json/errors.json','w');
fwrite($open_error_file,json_encode(array('errors'=>$errors,'validation_success'=>false),JSON_PRETTY_PRINT)) ;
fclose($open_error_file);
}
if(isset($_GET['success'])){
$open_error_file=fopen('json/errors.json','w');
fwrite($open_error_file,json_encode(array('errors'=>$errors,'validation_success'=>true),JSON_PRETTY_PRINT)) ;
fclose($open_error_file);
}
?>