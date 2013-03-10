<?php
define('DOC_ROOT_CNN',$_SERVER['DOCUMENT_ROOT']);
if(strpos($_SERVER['HTTP_HOST'],".dev") || strpos($_SERVER['HTTP_HOST'],".local")){
	$local=1;	
}else{
	$local=0;
}

if($local==1){
	define('DB_HOST','localhost');
	define('DB_NAME','yachtsservices');
	define('DB_USER','root');
	define('DB_PASS','mac85');
}else{
	define('DB_HOST','localhost');
	define('DB_NAME','marivalg_development_cms');
	define('DB_USER','marivalg_develop');
	define('DB_PASS','O]C(DIUg{XZ3');	
}
//require(DOC_ROOT_CNN."/includes/common/classes/connect.php");
?>