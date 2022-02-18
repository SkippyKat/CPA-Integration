<?php
require_once("developer.php");
if ($_SESSION['logged'] == 'yes') {
    $smarty->assign('user', $user_info['username']);

    $smarty->display('wall.tpl');
} else {
    header("location: index.php?view=login");
}
