<?php 
    include "pw2_1.php";
    echo 'funcA: '.funcA([1, 4, 8]).'<br>';
    echo 'funcA: '.funcA(4, 8).'<br>';
    echo 'funcB: '.funcB(3, 6).'<br>';
    echo 'funcC: '.funcC([1, 4, 8]).'<br>';
    echo 'funcC: '.funcC(3, 4).'<br>';
    echo 'funcD: '.funcD(3, 6).'<br>';
    echo 'funcD: '.funcD(3, 0).'<br>';
    echo 'funcE: '.funcE(3, 6).'<br>';
?>