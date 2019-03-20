<?php declare(strict_types=1);

namespace Nfq\Akademija\Strict {

    function calculateHomeWorkSum(...$numbers) {
        echo __FUNCTION__ . ": ";
        return _calculateHomeWorkSum(...$numbers);
    }

    function _calculateHomeWorkSum(int...$numbers): int {
        return array_sum($numbers);
    }
}