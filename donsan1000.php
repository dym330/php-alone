<?php
$n = 0;
$count1000 = 14;
$score = 0;
$price = 100;

do {
    $i = 0;
    $j = 0;
    $k = 0;
    $a = rand(1, 319);
    $i++;

    if ($a === 1) {
        $score = 600 * $price / 1000;
        $k++;
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
                    $c === 1 ? $score += 900 * $price / 1000 : $score += 300 * $price / 1000;
                    $c === 1 ? print 'A' : print 'B';
                    $k++;
                    $j = 0;
                    // print $score;
                    // print "<br />";
                }
            } while ($j !== 5);
        }
        $money = ceil($i / $count1000) * $price;

        $sum = $score * 4 - $money;
        print "<br />";
        print "{$k}連チャン　回収{$sum}円";
        print "<br />";
    }


    $n++;
} while ($n < $count1000 && $score === 0);

if ($score === 0) {
    print "残念外れです";
}
