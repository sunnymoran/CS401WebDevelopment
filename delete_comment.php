<?php

require_once 'Dao.php';
$dao = new Dao();
$table = "commentsSam";
$dao->deleteComment($_GET[comment_id],$table);
header('Location: samurai.php');
exit();