<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tap</title>
</head>
<body>
<form name="form1" method="post" action=""> 
<button name="submit">+</button>
</form>
</body>
</html>
<?
if(isset($_POST['submit'])) {
 $n = 0;
 $s = $n + 1;
 echo $s;
}
if(isset($_POST['submit'])) {
 $s1 = $s + 1;
 echo $s1;
}
?>