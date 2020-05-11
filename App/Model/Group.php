<?php
/**
 * Copyright (c) 2020 Alberto González
 */

namespace Minimalism\App\Model;

/**
 * Class Group
 * @package Minimalism\App\Model
 */
class Group extends \Minimalism\Model\Group
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
