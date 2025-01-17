<?php
/**
 * Copyright (c) 2020 Alberto González
 */

namespace Minimalism\App\Controller;

$url = $this->getCurrentRoute();

header('HTTP/1.0 401 Unauthorized');
trigger_error("[401] $url", E_USER_WARNING);

if (!defined('AJAX_METHOD')) {
    $this->addTwigVars('siteTitle', 'Error 401 - '.$this->getContainer()->get('config')->val('app.BRAND_NAME'));
    $this->addTwigVars('e401', true);
    $this->setView('http-errors');
    $this->render();
}
