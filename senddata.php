<?php
$db = mysqli_connect('hostname', 'username', 'password', 'databasename');

$name = mysqli_real_escape_string($db, $_REQUEST['name']);
$question = mysqli_real_escape_string($db, $_REQUEST['question']);
$opt1 = mysqli_real_escape_string($db, $_REQUEST['opt1']);
$opt2 = mysqli_real_escape_string($db, $_REQUEST['opt2']);
$opt3 = mysqli_real_escape_string($db, $_REQUEST['opt3']);
$opt4 = mysqli_real_escape_string($db, $_REQUEST['opt4']);
$answer = mysqli_real_escape_string($db, $_REQUEST['answer']);
$difficulty = mysqli_real_escape_string($db, $_REQUEST['difficulty']);
$category = mysqli_real_escape_string($db, $_REQUEST['category']);
$version = mysqli_real_escape_string($db, $_REQUEST['version']);

$sql = "insert into quiz set question = '".$question."', option1 = '".$opt1."', option2 = '".$opt2."', option3 = '".$opt3."', option4 = '".$opt4."', answer='".$answer."', date_entered=NOW(), date_modified=NOW(), deleted='0', difficulty='".$difficulty."', category='".$category."', image=NULL, audio=NULL, version='".$version."', delete_date='', extra3='".$name."'";
// echo $sql;
$result = $db->query($sql);
// if(isset($result)){
// 	echo "record inserted";
// }else{
// 	echo "couldn't insert record";
// }
// print_r($result);
// exit;
?>
<html>
<head>
<script>
	document.location.href = "http://codetron.co.in/deentrivia/addquestions";
</script>
</head>