<?php
	include "../public/demon.php";
	include "../../conf/dbconfig.php";
	include "../../includes/mysql_func.php";
	if(empty($_SERVER['HTTP_REFERER'])){
		exit('�Ƿ�����');
	}
	if(!empty($_POST['title'])){
		$title = $_POST['title'];
		$content = $_POST['content'];
		$cid = $_POST['cid'];
		$ptime = $_SERVER['REQUEST_TIME'];
		$pip = ip2long($_SERVER['REMOTE_ADDR']);
		$uid = $_SESSION['admin']['username']['id'];

		$sql = "insert into ".DB_PRE."post(title,content,cid,ptime,uid,pip) values('$title','$content','$cid','$ptime','$uid','$pip')";

		$row = mysql_func($sql);
		

		if(!$row){
			echo "<script>alert('��Ǹ��д�����ݿ�ʧ�ܣ����Ժ����ԣ�')</script>";
			echo "<script>window.location.href='../index.php?m=post&a=list'</script>";
			exit;
		}

		echo "<script>window.location.href='../index.php?m=post&a=list'</script>";
		exit;
	}
?>