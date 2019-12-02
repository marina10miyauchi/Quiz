<?php
require_once('common.php');

// 引数（クエリー）を受け取る
$qid    = isset($_GET['qid'])? $_GET['qid']:-1; 
$answer = $_GET['answer'];

$data=getDB1('select max(id) as maxid from question');

// Validation
if($qid == -1 || !is_numeric($qid) || !((0<=$qid) && ($qid<=$data['maxid'])) ){
	echo 'error: $qid invalid';
	exit(1);
}
$data = getDB1('select answer from question where id=?',[$qid]);

// 正解か判定
if( $data['answer'] == $answer ){
	echo "正解！";
}
else{
	echo "残念！";
}
