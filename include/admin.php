<?php
session_start();

if($_SESSION['username']=="")
{
	header("Location:index.php");
}
?>
<html><head>
<script type="text/javascript" src="config/prms.js">
</script>
<title>URBS Online Company Registration</title>

	<link href="config/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
a {
	font-size: 16px;
}
a:link {
	text-decoration: none;
	color: #000000;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
body {
	background-image: url(images/bg.jpg);
}
.style1 {
	font-size: 16px;
	font-weight: bold;
	color: #FF0000;
}
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
                                <td height="45"><div align="center">
                                  <table width="182" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td><a href="index.php">Logout</a></td>
                                    </tr>
                                  </table>
                                </div></td>
                              </tr>
                              <tr>
                                <td><br>
                                  <table width="419" border="0" align="center" cellpadding="7" cellspacing="1" bgcolor="#62A6E3">
                                    <tr>
                                      <td colspan="3" bgcolor="#FFFFFF"><div align="center" class="style1">Administrator Panel </div></td>
                                    </tr>
                                    <tr>
                                      <td width="191" bgcolor="#FFFFFF"><div align="center"><a href="reg2.php"><strong>View applicants</strong></a></div>                                        
                                        <a href="config/patientr.php"></a></td>
                                      <td width="23" bgcolor="#FFFFFF">&nbsp;</td>
                                      <td width="183" bgcolor="#FFFFFF"><div align="center"><strong><a href="reg3.php">View registration</a></strong></div>                                        
                                        <a href="config/payr.php"></a></td>
                                    </tr>
                                    <tr>
                                      <td colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
                                    </tr>
                                </table></td>
                              </tr>
                              <tr>
                                <td height="78">&nbsp;</td>
                              </tr>
                            </table>
              <p style="margin-top: 0pt; margin-bottom: 0pt;" align="center">&nbsp;</p></td>
              </tr>
			<tr>
			  <td style="border-top-style: solid; border-top-width: 1px;">&nbsp;</td>
			</tr>
	</tbody></table>
    <p align="center"> All rights reserved</p>
	</body></html>