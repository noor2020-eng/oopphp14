<?php
include_once "abstract/paymenttypes.abstract.php";
include_once "classes/BuyProdect.classes.php";

$buyProdect= new BuyProdect();
echo $buyProdect->getPayment();