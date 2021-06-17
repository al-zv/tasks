<?php
    /* В классе Find описан метод find, который отображает найденную страницу на сайте https://www.php.net через функцию file_get_contentsы. 
    Поиск осуществляется через URI, в который подставляется запрос, введенный пользователем в форме ввода. */
    class Find
    {
        public static function find($name){
            return file_get_contents('https://www.php.net/manual-lookup.php?pattern=' . $name . '&scope=quickref');
        }
    }