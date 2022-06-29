<?php

/* Controllers */
require_once "controllers/TemplateController.php";
require_once "controllers/LinkController.php";
require_once "controllers/HomeController.php";

/* Models */
require_once "models/Links.php";
require_once "models/Home.php";

/* Calling Template */
$template = new TemplateController();

$template->template();