<?php
/**
 * Copyright (c) 2020 Alberto González
 */

namespace Minimalism\App\Controller;

$result = array(
    'success' => false,
);

$id = (int) $_REQUEST['id'];
if ($id == 1) {
    $result['success'] = true;
}

$this->respondAjaxRequest($result['success']);
