# yii2-sparkline
A wrapper for Jquery Sparkline in Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist mrlco/yii2-sparkline "*"
```

or add

```
"mrlco/yii2-sparkline": "*"
```

to the require section of your `composer.json` file.

Usage
-----

```php
<?= \mrlco\sparkline\Sparkline::widget([
    'clientOptions' => [
        'type' => 'bar',
        'height' => 20,
        'barColor' => '#00a65a',
    ],
    'data' => [90, 80, 90, -70, 61, -83, 63]
]); ?>
```
