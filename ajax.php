<?php
require_once "PrintingFactory.php";
if (!empty($_POST['customer'])) {
    $printSingle = PrintingFactory::build('view', $_POST);
    $printSingle->getContract();
}
