<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet"/>
<title>登陆结果</title>
</head>

<body>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("test", $con);

$result = mysql_query("SELECT * FROM user");



while($row = mysql_fetch_array($result)){
if ($row['username'] == $_POST["name"]  &&   $row['password'] == $_POST["psw"])
{
  echo "登陆成功！";
}
}

mysql_close($con);
?>
</body>
</html>