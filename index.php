<?php
/**
 * Redirection using routing controls
 * #1
 */
require_once 'controller/cont.router.php';

$router = new Roouter();
$router->requestPage()->renderPage();

/* QOP */