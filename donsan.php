<?php
$n = 0;
$count1000 = 18;
$total = 0;
$nCount = 1000;

do {
    $i = 0;
    $j = 0;
    do {
        $a = rand(1, 319);
        $i++;
    } while ($a !== 1);

    $score = 600;
    $b = rand(1, 10);
    if ($b <= 6) {
        do {
            do {
                $b = rand(1, 2);
                $j++;
                // print $b;
            } while ($b === 2 && $j !== 5);
            // print "<br />";

            if ($j !== 5 && $b === 1) {
                $c = rand(1, 5);
                $c === 1 ? $score += 900 : $score += 300;
                $j = 0;
                // print $score;
                // print "<br />";
            }
        } while ($j !== 5);
    }
    $money = ceil($i / $count1000) * 1000;

    $sum = $score * 4 - $money;
    // print "{$i}回転 投資{$money}円　回収{$sum}円";
    // print "<br />";

    $total += $sum;
    $n++;
} while ($n <= $nCount);

print "最終結果{$total}円";



