<!--首頁，製作超連結至login.php-->
<?php 

if (isset($_COOKIE["userName"]))
  $sUserName = $_COOKIE["userName"];//have cookie use cookie name
else 
  $sUserName = "Guest";//haven't 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lab - index</title>
</head>
<body>

<table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
  <tr>
    <td align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 首頁</font></td>
  </tr>
  <tr>
  
  <?php if ($sUserName == "Guest"): ?>
    <td align="center" valign="baseline"><a href="login.php">登入</a> <!--yes-->
  <?php else: ?>
    <td align="center" valign="baseline"><a href="login.php?logout=1">登出</a><!--no-->
  <?php endif; ?>
    
    | <a href="secret.php">會員專用頁</a></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#CCCCCC"><?php echo "Welcome! " . $sUserName /*登入成功後會出現使用者帳號*/?> </td>
  </tr>
</table>


</body>
</html>