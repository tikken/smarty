
<?php
// Обратите внимание: в слове Smarty буква 'S' должна быть заглавной
require_once('./libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->display('./templates/first.tpl');


?>