<?php 
session_start(); 
 ?>
<!-- 設定網頁編碼為UTF-8 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="connect.php">
帳號* <input type="acount" name="id" /> <br>
密碼* <input type="password" name="pw" /> <br>
生日* <input type="birthday" name="birth" />yyyy/mm/dd<br>
信箱* <input type="email" name="email" /> <br>
性別* <input type="radio" name="gender" value="男生">♂
<input type="radio" name="gender" value="女生">♀<br>
職業* <select name="profession">
　<option value="CodeFarmer">碼農</option>
　<option value="ProgramManager">PM</option>
　<option value="GGer">輪班星人</option>
　<option value="Student">學生</option>
　...
</select><br>
請勾選你的興趣<br>
<input type="checkbox" value="旅遊" name="Interest[]"><label>旅遊</label><br>
<input type="checkbox" value="電影" name="Interest[]"><label>電影</label><br>
<input type="checkbox" value="美食" name="Interest[]"><label>美食</label><br>
介紹一下自己吧<br>
<textarea style="width:300px;height:100px;" name="jikoshoukai">
</textarea><br>
<input type="submit" name="button" value="登入" />
</form>
<?php
if(isset($_SESSION['wrongid']) || isset($_SESSION['wrongpw']) 
	|| isset($_SESSION['wrongbirth']) || isset($_SESSION['wronggender'])
	|| isset($_SESSION['wrongemail']))
{
	if($_SESSION['wrongid'] == TRUE){
		echo '帳號不能空白<br>';
		$_SESSION['wrongid'] = FALSE;
	}
	if($_SESSION['wrongpw'] == TRUE){
		echo '密碼不能空白<br>';
		$_SESSION['wrongpw'] = FALSE;
	}
	if($_SESSION['wrongbirth'] == TRUE){
		echo '生日格式錯誤(yyyy/mm/dd)<br>';
		$_SESSION['wrongbirth'] = FALSE;
	}
	if($_SESSION['wronggender'] == TRUE){
		echo '性別未填<br>';
		$_SESSION['wronggender'] = FALSE;
	}
	if($_SESSION['wrongemail'] == TRUE){
		echo '信箱不能空白<br>';
		$_SESSION['wrongemail'] = FALSE;
	}
}
 ?>