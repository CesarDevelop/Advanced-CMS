<?
$user_name1=$_POST['user_name1'];
$user_pass1=$_POST['user_pass1'];
$login_button=$_POST['login_button'];

$file1 = "$user_name1.txt";
if(isset($login_button)){
 if (file_exists($file1)) {
  require "$user_name1.txt";
  if($password == $user_pass1){
    $login_session = 1;
  	echo "You have successfully entered.";
  }
  else{
  	echo "Incorrect password!";
  }
}
 else{
	 echo "You are not registered yet.";
}
}
?>