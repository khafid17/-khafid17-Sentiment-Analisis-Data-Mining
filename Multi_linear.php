<?php

require_once 'vendor/autoload.php';

use Phpml\regression\LeastSquares;

$samples = [[73676, 1996],[77006, 1998], [10565, 2000], [146088, 1995], [15000, 2000],
[65940, 2000], [9300, 2000], [93739, 1996], [153260, 1994], [17764, 2002], [57000, 1998],
[15000, 2000]];
$targets = [2000, 2750, 15500, 960, 4400, 8800, 7100, 2550, 1025, 5900, 4600, 4400];

$regression = new LeastSquares();
$regression->train($samples, $targets);
echo $regression->predict([60000, 1996]);
// return 4094.82
$regression->getIntercept();
//return -7.9635135131
$regression->getCofficiebts();
// return [array(1) [[0]=>float(0.18783783783783)]]
?>