<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if($_SESSION['username'] != null){
echo '帳號:'.$_SESSION['username'].'<br>生日:'.$_SESSION['birth'].'<br>信箱:'.
$_SESSION['email'].'<br>性別:'.$_SESSION['gender'].'<br>興趣:'.$_SESSION['Interest'].
'<br>自我介紹:<br>'.$_SESSION['jikoshoukai'];
?>
<form name="form" method="post" action="logout.php">
	<input type="submit" name="button" value="登出" />
</form>
<?php
}
else{
	echo '您無權訪問此頁面';
	
}

 ?>