<?php 
session_start(); ?>
<!--啟用session-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id = $_POST['id'];
$pw = $_POST['pw'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$_SESSION['birth'] = $_POST['birth'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['profession'] = $_POST['profession'];
if(isset($_POST['gender']) != false){
	$_SESSION['gender'] = $_POST['gender'];	
} 
else{
	$_SESSION['gender'] = null;
}
if(isset($_POST['Interest'])){
	$Interest = $_POST['Interest'];
	$AllInterest = implode(',', $Interest);
	$_SESSION['Interest'] = $AllInterest;	
} 
else{
	$_SESSION['Interest'] = null;
}
$_SESSION['jikoshoukai'] = $_POST['jikoshoukai'];

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
function valid_birth($input_date)
{
    //正則
    $reg_one = "/^(\d{4})\/(\d{1,2})\/(\d{1,2}) ([01][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/"; 
    $reg_two = "/^(\d{4})\/(\d{1,2})\/(\d{1,2})$/";

    //檢查格式後用php function做日期檢查
    if (preg_match($reg_one, $input_date, $matches) || preg_match($reg_two, $input_date, $matches))
    {
        if (checkdate($matches[2], $matches[3], $matches[1])) {
            return true;
        }
        else{
        	return false;
        }
    }
	else{
		return false;
	}
    
}

if($id != null && $pw != null && valid_birth($birth) == TRUE 
	&& valid_email($email) == TRUE && $_SESSION['gender'] != null)
{	
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=main.php>';
}
else
{
	echo '登入失敗!';
	if($id == null){
    	
    	$_SESSION['wrongid'] = TRUE;
    }
    if($pw == null){
    	
    	$_SESSION['wrongpw'] = TRUE;
    }
    if(valid_birth($birth) != TRUE){
    	
    	$_SESSION['wrongbirth'] = TRUE;
    }
    if($_SESSION['gender'] == null){
    	$_SESSION['wronggender'] = TRUE;
    }
    if($_SESSION['email'] == null){
    	$_SESSION['wrongemail'] = TRUE;
    }
?>
<script type="text/javascript">
window.history.go(-1);
</script>
<?php
}
?>


