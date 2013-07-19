<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<link href="css/silverwolf/default.css" REL="stylesheet" TYPE="text/css">
<link href="admin/css/expediencrm.css" rel="stylesheet" type="text/css" />

<head>
</head>
<title>SMS APPLICATION</title>
<?php include(ADMINPATH.'includes/header.php'); ?>
<div class="content-main">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  
   <?php
  
                ?>
             <tr>
		<td height="29" valign="top" class="main_menu"><?php
		/*switch ($_REQUEST['mod']) {
                    case '1' :*/
		 include_once('manageApplications.php');
                   /* break;

                case '2' :
                    include_once('managefinance.php');
                    break;

                case '7' :
                    include_once('manageSite.php');
                    break;
                default;*/
                   // print "<br><br><br><br><br><br><span style='font-family:Segoe UI; font-size:22px; padding-left:20px'>Expedien CRM</span><br><br><br><br><br><br>";
            //}
         ?>
	
	<tr>
		<td align="left" valign="bottom"><?php include_once(ADMINPATH.'includes/footer.php') ?></td>
	</tr>
</table>
</div>
</HTML>
