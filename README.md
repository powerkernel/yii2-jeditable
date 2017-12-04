yii2-jeditable
==============

JQuery Editable extension For Yii 2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist powerkernel/yii2-jeditable "*"
```

or add

```
"powerkernel/yii2-jeditable": "*"
```

to the `require` section of your composer.json.

Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?=
    \powerkernel\jeditable\Editable::widget([
        'content' => 'Editable content here',
        'saveUrl'=>Yii::$app->urlManager->createUrl(['#save-url']),
        'clientOptions'=>[
            'tooltip'=>'click to edit',
            'indicator'=>'saving...'
        ]
    ]);
?>
```