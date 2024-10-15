<?php

define('ROOT', rtrim(__DIR__, '/'));

require_once 'cust/config.php';
require_once 'src/ResolviaPay.php';

$ResolviaPay = new ResolviaPay($config);

$content = $ResolviaPay->getContent();

require_once $ResolviaPay->getLayout();