<?
include_once 'setup-manager.php';
if ($setup == 1) {
	echo "string";
}
 elseif ($setup == 0) {
 	include_once 'install-page.php';
 }
 else{
   echo "error";
 }
?>