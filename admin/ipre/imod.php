<?php
	header("content-type:text/html;charset=utf-8");
	include "../public/demon.php";
	include "../../conf/dbconfig.php";
	include "../../includes/mysql_func.php";
?>
<?php
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}

	if(!empty($_POST['ipmin'])){
		$ipmin = ip2long($_POST['ipmin']);
		$ipmax = ip2long($_POST['ipmax']);
		

		//�������ݵ�USER�������
		
		$sql = "update ".DB_PRE."iprefuse set ipmin='$ipmin',ipmax='$ipmax' where id='$id'";
		$row = mysql_func($sql);

		if($row===false){
			echo "<script>alert('��Ǹ��д������ʧ�ܣ����Ժ����ԣ�')</script>";
			echo "<script>window.location.href='../index.php?m=ipre&a=list'</script>";
			exit;
		}

		//ִ�й�����û�г�����Ϊ������ת��LIST�б���
		echo "<script>window.location.href='../index.php?m=ipre&a=list'</script>";
		exit;
	}
	
	//POST�����ڣ�����ѯ��������
	$sql = "select * from ".DB_PRE."iprefuse where  id='$id'";
	//echo $sql;
	//exit;
	$row = mysql_func($sql);
	$fri = $row[0];
	/*echo "<pre>";
	var_dump($fri);
	echo "</pre>";*/
?>