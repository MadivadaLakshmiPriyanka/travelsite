
<html>
<head>
<style type="text/css">
th{
font-size:24px;
color:pink;
}
input,textarea{
font-size:22px;
padding:5px;
border-radius:9px;
}
</style>
</head>
<body bgcolor="olive">
<form action="auth.php" method="post">
<font size="6" color="red">

<table width=640 border=5 bordercolor="black" align="center" bgcolor="green" cellpadding="12">
<tr>
<td>USERNAME</td>
<td>
<input type="text" placeholder="Enter username" autofocus required name="uname">
</td>
</tr>
<tr>
<td>PASSWORD</td>
<td>
<input type="password" placeholder="Enter password" required name="upass">
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="next" name="submit">
<input type="reset" value="reset">
<a href="index.php">SIGNUP</a>
</td>
</tr>

</table>
</font>
</form>
</body>
</html>