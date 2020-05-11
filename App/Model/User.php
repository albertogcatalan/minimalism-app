<?php
/**
 * Copyright (c) 2020 Alberto González
 */

namespace Minimalism\App\Model;

class User extends \Minimalism\Model\GuardUser
{
    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        $this->fields['level']['type'] = 'enum';
        $this->fields['level']['values'] = ['user', 'admin'];

        parent::__construct();
    }
}
