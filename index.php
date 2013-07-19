<?php
require_once("constants.php");
if (!isset($_SESSION['session_user_id_admin']) || (!in_array($_SESSION['userType_admin'], $adminArr))) {
    include('Login.php');

} else {  

	require_once(SITEVIEWPATH."index.php");
}
?>

  
