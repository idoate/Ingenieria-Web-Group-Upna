<?php

    class Database
    {

        // DATABASE SETTINGS
        private const DB_HOST = 'localhost';
        private const DB_NAME = 'test';
        private const DB_CHARSET = 'utf8';
        private const DB_USER = 'root';
        private const DB_PASSWORD = '';

        private static $database = null;

        private function __construct()
        {
            // DATABASE CONSTRUCTOR
        }

        public static function getDatabase()
        {

            if (is_null(self::$database)) {

                self::$database =
                new PDO("mysql:host=". self::DB_HOST .";dbname=". self::DB_NAME .";charset=". self::DB_CHARSET, DB_USER, DB_PASSWORD);

            }

            return self::$database;

        }

    }

?>