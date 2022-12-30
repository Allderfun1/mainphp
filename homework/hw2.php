<h3>Задание 1</h3>
<?php 
    function f1($a, $b) {
        echo "a = $a<br>b = $b<br>";
        if ($a % $b == 0) echo "a кратно b";
        else echo "a не кратно b";
    }
    f1(3, 2);
    echo "<br><br>";
    f1(9, 3);
    echo "<br><br>";
?>
<h3>Задание 2</h3>
<?php 
    function f2($a, $b) {
        echo "a = $a<br>b = $b<br>";
        if ($a > $b) echo "a<sup>2</sup> = ". $a ** 2;
        else echo "b<sup>2</sup> = ". $b ** 2;
    }
    f2(2, 3);
    echo "<br><br>";
    f2(9, 3);
    echo "<br><br>";
?>
<h3>Задание 3</h3>
<?php 
    function f3($a) {
        switch($a) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12: $b = 31; break;
            case 4:
            case 6:
            case 9:
            case 11: $b = 30; break;
            case 2: $b = 28; break;
        }
        echo "Month - $a<br>Days in the month - $b<br>";
    }
    for ($i = 2; $i <= 12; $i += 3) {
        f3($i);
        echo "<br><br>";
    }
?>
<h3>Задание 4</h3>
<?php 
    function f4($a) {
        if ($a % 4 == 0) {echo "Year - $a<br>$a is leap-year<br>";}
        else {echo "Year - $a<br>$a isn't leap-year<br>";}
    }
    f4(2013);
    echo "<br><br>";
    f4(2016);
    echo "<br><br>";
?>
<h3>Задание 5</h3>
<?php 
    function f5($a, $b) {
        echo "a = $a<br>b = $b<br>";
        if ($a % 3 == 0 && $b % 3 == 0) {echo "a + b = " . ($a + $b);}
        else if ($b != 0) {echo "a / b = " . ($a / $b);}
        else {echo "Некорректный ввод!";}
    }
    f5(3, 9);
    echo "<br><br>";
    f5(2, 8);
    echo "<br><br>";
    f5(2, 0);
    echo "<br><br>";
?>
<h3>Задание 6</h3>
<?php 
    function f6($session_id) {
        echo "session_ID = $session_id<br>";
        if ($session_id) {echo 'Вы зарегистрированы!
            <a href="#">Login</a>
        ';}
        else {echo 'Зарегистрируйтесь
            <form>
                <input type="text" placeholder="Login">
                <input type="password" placeholder="Password">
            </form>
        ';}
    }
    f6(0);
    echo "<br>";
    f6(1);
    echo "<br>";
?>