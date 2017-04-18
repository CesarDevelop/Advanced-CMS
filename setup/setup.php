<?
//Temporarily not used
function register(){
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
}
register();

function onSelectLanguage(){
	$englang = $_POST['eng'];
	if (isset($_POST['englang'])){
		echo "string";
	}
}
onSelectLanguage();
?>