<?php session_start(); ?>
<!--啟用session-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id = $_POST['id'];
$pw = $_POST['pw'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$Interest = $_POST['Interest'];
$jikoshoukai = $_POST['jikoshoukai'];
function valid_email($email) //驗證信箱格式
{
	if( ereg("^[A-Za-z0-9\.\-]+@[A-Za-z0-9]+\.[A-Za-z0-9\.]+$", $email))
    {
        return TRUE;
    } 
    else 
    {
        return FALSE;
    }
}
function valid_birth($birth) //驗證生日格式
{
    if( ereg("^[12][0-9]{3}-([0][1-9])|([1][12])-([0][1-9])|([12][0-9])|([3][01])$", $birth))
    {
        return TRUE;
    } 
    else 
    {
        return FALSE;
    }
}
if($id != null && $pw != null && valid_birth($birth) == TRUE && valid_email($email) == TRUE)
{	
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=https://giphy.com/gifs/3o7abzefqmy9QUt86k/tile>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';

}
?>