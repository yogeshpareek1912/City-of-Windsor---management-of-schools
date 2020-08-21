<?php 
include_once('config1.php');
if(isset($_REQUEST['delId']) and $_REQUEST['delId']!=""){
	$db->delete('users',array('id'=>$_REQUEST['delId']));
	header('location: browse-users.php?msg=rds');
	exit;
}
?>