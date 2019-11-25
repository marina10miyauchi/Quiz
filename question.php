<?php
require_once('common.php');

$i = rand(0, count($question)-1);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>QuizGame Title</title>
</head>
<body>
    <h1>Question</h1>
	<?= $question[$i][0] ?>

    <form action="result.php">
    <input type="hidden" name="qid" value="<?= $i ?>">
        <input type="text"id="text-answer" name="answer">
        <button id="btn-answer">回答</button>
</form>
<script>

    document.querySelector("#btn-answer").addEventListener("click",(e)=>{
    let answer = document.querySelector("#text-answer");

    if( answer.value ==""){
        alert("入力してください");
        answer.focus();
        answer.style.backgroundColor="Pink";
        e.preventDefault();
    }
    else{
        document.querySelector("#btn-answer").innerHTML="...送信中...";
    }
   
    });
    </script>
    </body>
    </html>

