# Money component for uniondrug/framework

货币高精度处理方法

## 安装

```shell
$ cd project-home
$ composer require uniondrug/money
```


## 使用

```php
<?php
/**
 * test.php
 *
 */
require '../Currency.php';
require '../Money.php';
use Uniondrug\Money\Money;

$money = Money::create(5000); // 构造一个货币对象
echo $money;
echo "\n";


$money = $money->add(Money::create(600)); // 与另一个货币对象相加
echo $money;
echo "\n";

$money = $money->subtract(Money::create(500)); // 与另一个货币对象相减
echo $money;
echo "\n";

$money = $money->multiply(4); // 乘以
echo $money;
echo "\n";

$money = $money->divide(3); // 除以
echo $money;
echo "\n";

// 判断
$money->isZero();
$money->isNegative();
$money->isPositive();
$money->equals(Money::create(800));
$money->lessThan(Money::create(800));
$money->greaterThan(Money::create(800));
$money->lessThanOrEqual(Money::create(800));

// 格式化
echo $money->format(2, '.', '');
echo "\n";
```