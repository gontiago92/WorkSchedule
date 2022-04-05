<?php

namespace WorkSchedule\Models;

use WorkSchedule\Database;

abstract class Model {

    protected $table;
    protected $model;


    public function findAll()
    {
        $req = Database::getInstance()->query("SELECT * FROM {$this->table}");

        return $req->fetchAll();
    }
}