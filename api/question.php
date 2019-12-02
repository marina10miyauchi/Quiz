<?php
require_once('../common.php');
//idの最大値を取得（=問題数）
$data = getDB1('select max(id) as maxid from question');
//出題する問題の決定
$i = rand(1, $data['maxid']);

//問題文の取得
$data = getDB1('select question from question where id=?', [$i]);

$param =[
	'text'=>$data['question'],
	'qid'=>$i
];
	echo json_encode($param);
