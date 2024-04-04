<?php
require_once 'autoload.php';

use Config\Connect;
use Controller\ExemploController;
use View\ExemploView;
use Model\ExemploModel;

$config = new Connect();
$m = new ExemploModel();
$v = new ExemploView();
$c = new ExemploController();