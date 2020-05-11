<?php
/**
 * Copyright (c) 2020 Alberto González
 */

namespace Minimalism\App\Controller;

use Minimalism\Core\Controller;

/**
 * Class Home
 * @package Minimalism\App\Controller
 */
class Home extends Controller
{
    /**
     *
     */
    public function indexAction()
    {
        $this->addTwigVars('helloWorld', 'Mi first page class -> '.$this->getContainer()->get('config')->val('app.STABLE_VERSION'));
        $this->render();
    }
}
