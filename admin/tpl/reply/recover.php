<?php

	include "../core/del_func.php";
	
	$id = @$_REQUEST['id'];
	$cz = @$_REQUEST['cz'];
	
	if(!empty($id) && !empty($cz)){

		$sql = "update ".DB_PRE."reply set xx='".$cz."' where id='$id'";
		$row = mysql_func($sql);
	}
	
	echo "<script>window.location.href='./index.php?m=reply&a=lists'</script>";
	exit;
?>