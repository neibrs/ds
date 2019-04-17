<?php
if(!defined('InEmpireBak'))
{
	exit();
}
define('EmpireBakConfig',TRUE);

//Database
$phome_db_dbtype='mysql';
$phome_db_ver='5.0';
$phome_db_server='localhost';
$phome_db_port='';
$phome_db_username='root';
$phome_db_password='52jscn.com';
$phome_db_dbname='';
$baktbpre='';
$phome_db_char='';

//USER
$set_username='admin';
$set_password='ccfce0a0af1fd4b32c8a4b04a4bd7696';
$set_loginauth='';
$set_loginrnd='aH4W4P8yqPvmiupbj5S82AjZ89tcKs';
$set_outtime='60';
$set_loginkey='1';
$ebak_set_keytime=60;
$ebak_set_ckuseragent='';

//COOKIE
$phome_cookiedomain='';
$phome_cookiepath='/';
$phome_cookievarpre='fxwurb_';

//LANGUAGE
$langr=ReturnUseEbakLang();
$ebaklang=$langr['lang'];
$ebaklangchar=$langr['langchar'];

//BAK
$bakpath='bdata';
$bakzippath='zip';
$filechmod='1';
$phpsafemod='';
$php_outtime='1000';
$limittype='';
$canlistdb='';
$ebak_set_moredbserver='';
$ebak_set_hidedbs='';
$ebak_set_escapetype='1';

//EBMA
$ebak_ebma_open=1;
$ebak_ebma_path='phpmyadmin';
$ebak_ebma_cklogin=0;

//SYS
$ebak_set_ckrndvar='gsvqwdqhwnfa';
$ebak_set_ckrndval='00ddc34b64822964ee44cafb0c543a6e';
$ebak_set_ckrndvaltwo='5cf5efc93e614af32ab9a1d190197c2c';
$ebak_set_ckrndvalthree='8f96e8f76054d8d2358a3720207bdccb';
$ebak_set_ckrndvalfour='a1d5c88e0c8e51afee8869d023e17897';

//------------ SYSTEM ------------
HeaderIeChar();
?>