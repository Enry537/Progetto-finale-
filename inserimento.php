<?php
// avviamo la sessione per continuare la precedente o crearne una nuova
session_start();

	if ( ($_GET['login'] == "success") ||  ($_GET['insert'] == "success") || ($_GET['logout'] == "success")) {
	header( "refresh:1;url={$_SERVER['PHP_SELF']}" ); 
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Annunciopoli | Annunci gratis</title>
<link href="files/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
    <div id="header">
         </div><!--#header-->
        <div id="navigation"><?php include ('files/menu_Hor.html'); ?></div><!--#navigation-->
    <div id="sidebar">
<?php include ('files/menu_Sid.php'); ?>
    </div>
    <div id="main">
        <?php include ('files/form_Ins.php'); ?>
    </div>
    <div id="footer"><?php include ('files/footer.html'); ?></div>
</div>
</body>
</html>
