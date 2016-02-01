<?php

namespace Model\table;

use Model\Ancestor;

class User extends Ancestor
{
    const TABLE = 'users';

    public $email;
    public $name;
}