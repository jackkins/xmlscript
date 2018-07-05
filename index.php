<?php
	include_once("db.class.php");
	include_once("shop.class.php");
    include_once("xmlworker.class.php");

	$db = new ModelDb();
    $shop = new Shop();
    $xmlw = new xmlworker();

	$db->host = "housefit.mysql.tools";
	$db->database = "housefit_shopdb";
	$db->user = "housefit_shopdb";
	$db->password = "xsf94pzk";

	$db->connect();

	$shop->setDB($db);

	$categories = $shop->setCategories();
    $products = $shop->setProducts();

	$xmlw->setShopLink($shop)
        ->createXML();


?>