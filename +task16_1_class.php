<?php
    class Find
    {
        public static function find($name){
            return file_get_contents('https://www.php.net/manual-lookup.php?pattern=' . $name . '&scope=quickref');
        }
    }