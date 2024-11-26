<?php
/**
 * 0, 1, 1, 2, 3, 5, 8, 13, 21, 34
 */

function fibonacci($a) {
    if ($a == 0) {
        return 0;
    }
    if ($a == 1) {
        return 1;
    }
    return fibonacci($a - 1) + fibonacci($a - 2);
}

echo fibonacci(38);

// fo call no 1 = increment(0) + 1
// fo call no 2 = (increment(0) + 1) + 1
// fo call no 3 = ((increment(0)+ 1) + 1) + 1
