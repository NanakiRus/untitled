<?php

require __DIR__ . '/class/View.php';

$view = new View();

$arrLinks = file(__DIR__ . '/data/data.txt');

$view->assign('links', $arrLinks);

$something = $view->render(__DIR__ . '/templates/links.php');