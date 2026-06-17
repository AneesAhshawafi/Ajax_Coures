<?php
$comments = array("Thanks", "Thank you", " Anther commnent");
if (isset($_POST['comment'])) {
    array_push($comments, $_POST['comment']);
}
foreach ($comments as $comment) {
    echo $comment . '<br>';
}
