<?php

class Validations
{
    private static $errors = [];

    public static function getErrors()
    {
        return self::$errors;
    }

    public static function isValid()
    {
        return count(self::$errors) == 0;
    }

    public static function isEmpty($variable, $key, $value)
    {
        if (empty($variable)) {
            self::$errors[$key] = $value;
        }
    }
}