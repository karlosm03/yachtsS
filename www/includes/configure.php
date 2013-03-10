<?php
/*//////////////////////////////////////////////////////////////////////////////////////////
/	
/	File: Setting up the environment
/	Version: 2.0
/	Date: February, 2013
/
*///////////////////////////////////////////////////////////////////////////////////////////
/*error_reporting(E_ALL);
ini_set('display_errors','On');
ini_set("register_argc_argv","1"); 
session_start();
if(!isset($_SESSION["ui"]["lang"])){
	$_SESSION["ui"]["lang"]["id"]=2;
	$_SESSION["ui"]["lang"]["code"]="en";
}*/
// OAUTH
/*switch(substr($_SERVER["QUERY_STRING"],1)){
	case "google":
		$_SESSION["o"]["provider"]=3;
		bºreak;
	case "twitter":
		$_SESSION["o"]["provider"]=2;
		break;
	case "yahoo":
		$_SESSION["o"]["provider"]=4;
		break;
	case "aol":
		$_SESSION["o"]["provider"]=5;
		break;
	case "facebook":
		$_SESSION["o"]["provider"]=1;
		break;
}*/

// APP INFORMATION
define('APP_VERSION','1.0');


// APP_NAME LOCATE IN LENGUAGE FOLDER
$ths_subdomain  = explode("/", $_SERVER['REQUEST_URI']);
define('APP_FOLDER', '/');//Physical folder where files are saved.
define('APP_URI','/admin/');//Virtual location of the app. related with uri path.
define('DOC_ROOT',((strrpos($_SERVER['HTTP_HOST'],"dev")===false)?$_SERVER['DOCUMENT_ROOT']:$_SERVER['DOCUMENT_ROOT']));

// DATABASE SETUP
include_once(DOC_ROOT."/includes/db.connect.php");

// URLS AND PATHS SETUP
define('ROOT',DOC_ROOT.APP_FOLDER);
define('HOST',$_SERVER['HTTP_HOST'].APP_FOLDER);
define('HTTP','http://');
define('HTTPS','http://');

// SHARED PATHS
define('DIR_UI',APP_FOLDER.'ui/');
define('DIR_INCLUDES',ROOT.'includes/');
define('LOAD_INCLUDES',HTTP.HOST.'includes/');
define('DIR_AUTH',DIR_INCLUDES.'auth/');
define('DIR_MEDIA',HOST.'media/');
define('ROOT_MEDIA',ROOT.'media/');
// SHARED PATHS
define('DIR_C_UI',DIR_UI.'common/');
define('DIR_C_INCLUDES',DIR_INCLUDES.'common/');
// SHARED UI PATHS
define('DIR_C_STYLES',DIR_C_UI.'styles/');
define('DIR_C_SCRIPTS',DIR_C_UI.'scripts/');
define('DIR_C_IMG',DIR_C_UI.'images/');
define('DIR_C_PLUGINS',DIR_C_UI.'plugins/');
// SHARED CORE PATHS
define('DIR_C_CLASSES',DIR_C_INCLUDES.'classes/');
define('DIR_C_LIBRARIES',DIR_C_INCLUDES.'libraries/');
define('DIR_C_MODULES',DIR_C_INCLUDES.'modules/');
define('DIR_C_VIEWS',DIR_C_INCLUDES.'views/');
// FRONTEND PATHS
define('DIR_F_UI',DIR_UI.'frontend/');
define('DIR_F_INCLUDES',DIR_INCLUDES.'frontend/');
// FRONTEND UI PATHS
define('DIR_F_STYLES',DIR_F_UI.'styles/');
define('DIR_F_SCRIPTS',DIR_F_UI.'scripts/');
define('DIR_F_IMG',DIR_F_UI.'images/');
// FRONTEND CORE PATHS
define('DIR_F_CLASSES',DIR_F_INCLUDES.'classes/');
define('DIR_F_LIBRARIES',DIR_F_INCLUDES.'libraries/');
define('DIR_F_MODULES',DIR_F_INCLUDES.'modules/');
define('DIR_F_VIEWS',DIR_F_INCLUDES.'views/');
//MOBIL PATHS
define('DIR_M_UI',DIR_UI.'mobil/');
define('DIR_M_INCLUDES',DIR_INCLUDES.'mobil/');
// MOBIL UI PATHS
define('DIR_M_STYLES',DIR_M_UI.'styles/');
define('DIR_M_SCRIPTS',DIR_M_UI.'scripts/');
define('DIR_M_IMG',DIR_M_UI.'images/');
// MOBIL CORE PATHS
define('DIR_M_CLASSES',DIR_M_INCLUDES.'classes/');
define('DIR_M_LIBRARIES',DIR_M_INCLUDES.'libraries/');
define('DIR_M_MODULES',DIR_M_INCLUDES.'modules/');
define('DIR_M_VIEWS',DIR_M_INCLUDES.'views/');
// BACKEND PATHS
define('DIR_B_UI',DIR_UI.'backend/');
define('DIR_B_INCLUDES',DIR_INCLUDES.'backend/');
// BACKEND UI PATHS
define('DIR_B_STYLES',DIR_B_UI.'styles/');
define('DIR_B_SCRIPTS',DIR_B_UI.'scripts/');
define('DIR_B_IMG',DIR_B_UI.'images/');
// BACKEND CORE PATHS
define('DIR_B_CLASSES',DIR_B_INCLUDES.'classes/');
define('DIR_B_LIBRARIES',DIR_B_INCLUDES.'libraries/');
define('DIR_B_MODULES',DIR_B_INCLUDES.'modules/');
define('DIR_B_DIALOGS',DIR_B_INCLUDES.'dialogs/');
define('DIR_B_VIEWS',DIR_B_INCLUDES.'views/');
define('DIR_B_CONTROLLERS',DIR_B_INCLUDES.'controllers/');
define('DIR_B_SNIPPETS',DIR_B_INCLUDES.'snippets/');
define('DIR_B_PLUGINS',DIR_B_INCLUDES.'plugins/');
define('DIR_B_INCLUDES_PLUGINS',APP_FOLDER.'includes/backend/plugins/');
// BACKEND LOAD PATHS
define('LOAD_B_TOOLS',HTTP.str_replace('//','/',HOST.APP_URI).'tools/');
define('LOAD_B_INCLUDES',LOAD_INCLUDES.'backend/');
define('LOAD_B_MODULES',LOAD_B_INCLUDES.'modules/');
define('LOAD_B_CONTROLLERS',LOAD_B_INCLUDES.'controllers/');
define('LOAD_F_INCLUDES',LOAD_INCLUDES.'frontend/');
define('LOAD_F_CONTROLLERS',LOAD_F_INCLUDES.'controllers/');
define('LOAD_C_INCLUDES',LOAD_INCLUDES.'common/');

// LANGUAGE AND ENVIRONMENT INCLUSION
//require(DIR_C_CLASSES."environment.php");

/*$visitor=$env->get_settings_site();
//print_r($visitor);
if(empty($visitor['default_lang'])){
	$visitor["lang_code"]="en";
	$visitor['default_lang'] = 2;
	$visitor['lang_translate']="es";
	$visitor['host_translate']=$env->get_alternate_site(1);
	$visitor['facebook_lang']="es_LA";
	define('MAILCHIMP_UI','');
}elseif($visitor['default_lang']==1){
	$visitor['lang_translate']="en";
	$visitor['host_translate']=$env->get_alternate_site(2);
	$visitor['facebook_lang']="es_LA";
	define('MAILCHIMP_UI','');
}else{
	$visitor['lang_translate']="es";
	$visitor['host_translate']=$env->get_alternate_site(1);
	$visitor['facebook_lang']="en_US";	
	define('MAILCHIMP_UI','');
}

define('DIR_F_LANGS',DIR_F_INCLUDES.'languages/'.$visitor["lang_code"].'/');
define('DIR_M_LANGS',DIR_M_INCLUDES.'languages/'.$visitor["lang_code"].'/');
define('DIR_C_LANGS',DIR_C_INCLUDES.'languages/'.$visitor["lang_code"].'/');
define('DIR_B_LANGS',DIR_B_INCLUDES.'languages/en/');

require(DIR_C_LANGS."environment.php");

// GENERAL CLASSES INCLUSION
require(DIR_C_CLASSES."dates.php");
require(DIR_C_CLASSES."users.php");
// COMMON LIBRARIES INCLUSION
require(DIR_C_LIBRARIES."general.php");
*/?>