<?php

namespace WorkSchedule;

class Config {

    public static function get($path) 
    {
        if($path) {
            $config = $GLOBALS['config'];
            $path = explode('/', $path);

            //debug($path);

            foreach($path as $bit) {
                $config = $config[$bit];
            }

            return $config;
        }

        return false;
    }
}