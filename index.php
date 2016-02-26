<!-- 設定網頁編碼為UTF-8 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="connect.php">
帳號* <input type="acount" name="id" /> <br>
密碼* <input type="password" name="pw" /> <br>
生日* <input type="birthday" name="birth" />yyyy/mm/dd<br>
信箱* <input type="email" name="email" /> <br>
性別* <input type="radio" name="gender" value="male">♂
<input type="radio" name="gender" value="female">♀<br>
職業* <select name="profession">
　<option value="CodeFarmer">碼農</option>
　<option value="ProgramManager">PM</option>
　<option value="GGer">輪班星人</option>
　<option value="Student">學生</option>
　...
</select><br>
請勾選你的興趣<br>
<input type="checkbox" value="Travel" name="Interest"> 旅遊<br>
<input type="checkbox" value="Movie" name="Interest"> 電影<br>
<input type="checkbox" value="Food" name="Interest"> 美食<br>
介紹一下自己吧<br>
<textarea style="width:300px;height:100px;" name="jikoshoukai">
</textarea><br>
<input type="submit" name="button" value="登入" />
</form>