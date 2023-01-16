<?php
    $ch = [0, 0, 0, 0];
    for ($i = 1000; $i <= 9999; $i++) {
        $iArr  = array_map('intval', str_split($i));
        if ($iArr[0] == $iArr[3] && $iArr[1] == $iArr[2]) $ch[0]++;
        if ($iArr[0] % 2 == 0 && $iArr[1] % 2 == 0 && $iArr[2] % 2 == 0 && $iArr[3] % 2 == 0) $ch[1]++;
        if ($iArr[0] % 2 != 0 && $iArr[1] % 2 != 0 && $iArr[2] % 2 != 0 && $iArr[3] % 2 != 0) $ch[2]++;
        if ($iArr[0] - 1 == $iArr[1] && $iArr[1] - 1 == $iArr[2] && $iArr[2] - 1 == $iArr[3]) $ch[3]++;
    }
    echo "Зеркальных: ".$ch[0]."<br>Четных: ".$ch[1]."<br>Нечетных: ".$ch[2]."<br>В порядке от большего к меньшему: ".$ch[3];
?>