<?php
/**
 * test.php
 *
 */
require '../Currency.php';
require '../Money.php';
use Uniondrug\Money\Money;

$money = Money::create(5000);
echo $money;
echo "\n";


$money = $money->add(Money::create(600));
echo $money;
echo "\n";

$money = $money->subtract(Money::create(500));
echo $money;
echo "\n";

$money = $money->multiply(4);
echo $money;
echo "\n";

$money = $money->divide(3);
echo $money;
echo "\n";

$money = $money->divide(3);
echo $money;
echo "\n";

$money->isZero();
$money->isNegative();
$money->isPositive();
$money->equals(Money::create(800));
$money->lessThan(Money::create(800));
$money->greaterThan(Money::create(800));
$money->lessThanOrEqual(Money::create(800));

echo $money->format(2, '.', '');
echo "\n";