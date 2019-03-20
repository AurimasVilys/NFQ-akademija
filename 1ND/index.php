<?php
/**
 * Created by PhpStorm.
 * User: Vilys
 * Date: 2019-03-20
 * Time: 16:29
 */

require __DIR__ . '/vendor/autoload.php';

echo calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;
echo \Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;
echo \Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;
echo \Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;