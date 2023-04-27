<?php

require_once "./view/partial/header.php";
require_once "./controller/router.php";
$cont = new ContactRepository();
var_dump($cont->getContactById(4));
require_once "./view/partial/footer.php";

?>