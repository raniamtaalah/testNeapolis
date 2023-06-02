<?php
function longestCommonSubsequence($str1, $str2) {
    $m = strlen($str1);
    $n = strlen($str2);

    $L = array();
    for ($i = 0; $i <= $m; $i++) {
        $L[$i] = array_fill(0, $n + 1, 0);
    }

    for ($i = 0; $i <= $m; $i++) {
        for ($j = 0; $j <= $n; $j++) {
            if ($i == 0 || $j == 0) {
                $L[$i][$j] = 0;
            } elseif ($str1[$i - 1] == $str2[$j - 1]) {
                $L[$i][$j] = $L[$i - 1][$j - 1] + 1;
            } else {
                $L[$i][$j] = max($L[$i - 1][$j], $L[$i][$j - 1]);
            }
        }
    }

    $lcsLength = $L[$m][$n];
    $lcs = '';

    $i = $m;
    $j = $n;
    while ($i > 0 && $j > 0) {
        if ($str1[$i - 1] == $str2[$j - 1]) {
            $lcs = $str1[$i - 1] . $lcs;
            $i--;
            $j--;
        } elseif ($L[$i - 1][$j] > $L[$i][$j - 1]) {
            $i--;
        } else {
            $j--;
        }
    }

    return $lcs;
}


$str1 = "ABCDGH";
$str2 = "AEDFHR";

$result = longestCommonSubsequence($str1, $str2);
echo $result;  // Output: ADH
