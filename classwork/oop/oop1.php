<?php 
    class newClass {
        private $a = 1;
        private $b = 2;
        function __construct($a, $b) {
            $this -> a = $a;
            $this -> b = $b;
        }
        function Show() { // по дефолту public
            echo 'a = '.$this -> a.'<br>b = '.$this -> b.'<br/>';
        }
    }
    //$newClass = new newClass(); 
    //var_dump($newClass); echo "<br>";
    //$newClass -> Show(); // вывод ф-ции (только для public)
    //$newClass -> a = 100; // замена значения переменной (только для public)
    //$newClass -> b = 200; // замена значения переменной (только для public)
    $newClass = new NewClass(100, 200); // заменяет значения переменных в конструкторе
    var_dump($newClass);
?>