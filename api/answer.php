<?php
require_once('../common.php');

$answer =isset($_GET['answer'])?$_GET['answer']:null;
$qid    =isset($_GET['qid'])?   $_GET['qid']:null;

$data=getDB1('select answer from question where id=?',[$qid]);

$param=[
    'result'=>($data['answer']==$answer)
];

echo json_encode($param);
