<?php
sleep(3);
require_once('common.php');

// 引数（クエリー）を受け取る
$qid    = isset($_GET['qid'])? $_GET['qid']:-1; 
$answer = $_GET['answer'];

// Validation
if($qid == -1 || !is_numeric($qid) || !((0<=$qid) && ($qid<count($question))) ){
	echo 'error: $qid invalid';
	exit(1);
}


// 正解か判定
if( $question[$qid][1] == $answer ){
	echo "正解！";
}
else{
	echo "残念！";
}
