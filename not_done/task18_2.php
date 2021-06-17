<?php

echo <<<'TASK'
18.2. Реализуйте класс Pager из разд. 18.5.
TASK;

abstract class Pager
{
    abstract public function total();
    abstract public function pnumber();
    abstract public function pageLink();
    abstract public function parameters();
}