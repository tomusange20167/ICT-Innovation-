<?php
session_start();
if($_SESSION['username']=="")
{
	header("Location:index.php");
}
?>
<html><head>

<title>URSB Online Company Registration</title>

	<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
a {
	font-size: 16px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {color: #FFFFFF}
-->
</style></head><body leftmargin="0" topmargin="0" bgcolor="#d7d7e5" marginheight="0" marginwidth="0">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tbody>
			<tr>
                            <td height="48">
                            <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center">&nbsp;              </p></td>
              </tr>
            <tr>
                            <td bordercolor="#666666" style="border-bottom-style: solid; border-bottom-width: 1px;" bgcolor="#ffffff" height="88">
                            <table width="945" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="45">&nbsp;</td>
                              </tr>
                              <tr>
                                <td><br>
                                  <table width="943" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#62A6E3">
                                    <tr>
                                      <td colspan="11" bgcolor="#FFFFFF"><div align="center">
<body>
<table width="200" border="0">
  <tr>
    <td><legend align="center">Send sms via email</legend>
      <form id="form2" name="form1" method="post" action="tomusange20167@gmail.com">
        <table width="178" border="0" align="center">
          <tr>
            <td><div align="center"> Name
              <input type="text" name="name" id="name" />
            </div></td>
          </tr>
          <tr>
            <td><div align="center"> E-mail
              <input type="text" name="email" id="email" />
            </div></td>
          </tr>
          <tr>
            <td><div align="center">Message</div></td>
          </tr>
          <tr>
            <td><textarea name="msg" rows="6" id="msg"></textarea></td>
          </tr>
          <tr>
            <td><div align="center">
                <input type="submit" name="Submit2" value="Send" />
            </div></td>
          </tr>
        </table>
      </form></td>
  </tr>
</table>
                                      
                                  </body>
</html>
