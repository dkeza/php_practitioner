<?php


class App
{

    protected static $registry = [];

    static function bind($key, $value) {
        static::$registry[$key] = $value;
    }

    static function get($key) {

        if (! array_key_exists($key, static::$registry)) {
            throw new Exception("No {$key} is bound in the container");
        }

        return static::$registry[$key];
    }

}