<?php
require_once 'user.php';
echo <<<'TASK'
НЕ СДЕЛАНО! В ПРОЦЕССЕ!
Изучить:
<a href="https://www.php.net/manual/ru/language.oop5.cloning.php">link</a>
19.1. Организуйте клонирование объектов класса User таким образом, чтобы пароль
пользователя password в клонированном объекте отличался от оригинала.
<br /><br />
TASK;
/*
class ClonePass extends User
{
    public function clonePass($clone, $original)
    {
        $clone = clone $original;
        $clone->password = '4444';
        return $clone;
    }
}
*/
/*
function clonePass($clone, $original)
    {
        $clone = null;
        $clone = clone $original;
        $clone->password = '4444';
        return $clone;
    }

$obj1 = new User(
    'rav@ggo.ru',
    'hfeir38ry');

print_r($obj1);

clonePass($clone, $obj1);

print_r($clone);*/
/*
$obj1 = new User(
    'rav@ggo.ru',
    'hfeir38ry');

$obj2 = clone $obj1;
print_r($obj2);*/

class ClonePass extends User
{
    function __clone(){
        parent::$password = clone parent::$password;
    }
}

$obj = new ClonePass;

