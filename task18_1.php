<?php

class ext_Directory extends Directory {
   public $var;
   public function print_var()
   {
      echo $this->var;
   }
}

$d = new ext_Directory("/users/al");
echo $d->path . "<br />";
$d->var = "fff" . "<br />";
echo $d->print_var();

echo "Вывод: наследование от предопределенного класса Directory не допускается";


/* проста практика использования класса Directory
$d = dir("/users/al");
echo "Дескриптор: " . $d->handle . "\n";
echo "Путь: " . $d->path . "\n";
while (false !== ($entry = $d->read())) {
   echo $entry."<br />";
}
$d->close();*/