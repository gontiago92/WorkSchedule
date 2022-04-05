<?php

$GLOBALS['config'] = [
    "mysql" => [
        "host" => "127.0.0.1",
        "user" => "root",
        "pass" => "admin",
        "dbname" => "workschedule",
    ],
    "routes" => [
        "GET" => [
            "/" => "Index",
            "/categories" => "Category#Index",
            "/category/:id" => "Category#Show"
        ],
        "POST" => [
            "/" => "Index"
        ]
    ]
];


spl_autoload_register(function($class) {
    include ROOT . "/src/" . str_replace('\\', '/', $class) . ".php";
});


function debug($var) {
    echo "<pre>" . print_r($var, true) . "</pre>";
}