<?php

namespace WorkSchedule\Models;

use WorkSchedule\Database;

class User extends Model {

    public function __construct()
    {
        $this->table = "Users";
    }
}