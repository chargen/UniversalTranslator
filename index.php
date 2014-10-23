<?php
	require_once "./gtfree.php";

	use Stichoza\Google\GoogleTranslate;

    $tr = new GoogleTranslate($_GET["from"], $_GET["to"]);

    echo $tr->translate($_GET["text"]);
?>