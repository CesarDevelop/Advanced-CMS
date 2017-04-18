<?
$user_email=$_POST['user_email'];
$user_name=$_POST['user_name'];
$user_pass=$_POST['user_pass'];
$user_ip = $_SERVER["REMOTE_ADDR"];

$file1 = "$user_name.txt";
if (isset($_POST["register_button"])){ 
if (file_exists($file1)) {
    echo "Account already exists!";
} else {
 $user_pass=$_POST['user_pass'];
 $file = fopen("$user_name.txt", "a+t"); 
  fwrite($file, "<?\n");
  fwrite($file, '$login="');
  fwrite($file, "$user_name");
  fwrite($file, '";');
  fwrite($file, "\n");
  fwrite($file, '$email="');
  fwrite($file, "$user_email");
  fwrite($file, '";');
  fwrite($file, "\n");
  fwrite($file, '$password="');
  fwrite($file, "$user_pass");
  fwrite($file, '";');
  fwrite($file, "\n");
  fwrite($file, '$admin=0;');
  fwrite($file, "\n");
  fwrite($file, '$ip = "');
  fwrite($file, "$user_ip");
  fwrite($file, '";');
  fwrite($file, "\n?>");
  fclose ($file); 
}
}
?>